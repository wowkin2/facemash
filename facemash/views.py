from django.http import HttpResponse
from django.template import Context, loader
from db_wrapper import db_init

import os
import random
import json


def __list_files(path):
    # returns a list of names (with extension, without full path) of all files 
    # in folder path
    files = []
    for name in os.listdir(path):
        if os.path.isfile(os.path.join(path, name)):
            files.append('img/{}'.format(name))
    return files 


def home(request):
    db = db_init()
    
    images = list(db.images.find())
    img = random.choice(images)
    
    t = loader.get_template('index.html')
    c = Context({
        'img': img
    })
    
    return HttpResponse(t.render(c), content_type="text/html")


def refresh(request):
    db = db_init()
    path = os.path.abspath(os.path.join('static', 'img'))
    images = __list_files(path)

    db.images.remove()
    id = 0
    for item in images:
        db['images'].insert({'name': item, 'id': id})
        id += 1

    t = loader.get_template('refresh.html')
    c = Context({'images': images})
    
    return HttpResponse(t.render(c), content_type="text/html")


def start(request):
    db = db_init()
    images = list(db.images.find())
    img1 = random.choice(images)
    img2 = random.choice(images)
    
    session_id = request.GET.get('id')
    
    t = loader.get_template('start.html')
    c = Context({'img1': img1, 'img2': img2, 'session_id': session_id})
    
    return HttpResponse(t.render(c), content_type="text/html")