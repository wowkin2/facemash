from django.http import HttpResponse
from django.template import Context, loader
from .models import Image


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


def __import_images():
    path = os.path.abspath(os.path.join('static', 'img'))
    images = __list_files(path)

    Image.objects.all().delete()
    count_id = 0
    for item in images:
        Image.objects.create(path=item, number=count_id)
        count_id += 1
    return Image.objects.all()


def home(request):
    images = Image.objects.order_by('-rating')
    if len(images) == 0:
        images = __import_images()
    img = random.choice(images)

    t = loader.get_template('index.html')
    c = Context({
        'img': img,
        'images': images,
    })
    
    return HttpResponse(t.render(c), content_type="text/html")


def refresh(request):
    images = __import_images()

    t = loader.get_template('refresh.html')
    c = Context({'images': images})

    return HttpResponse(t.render(c), content_type="text/html")

def __get_pair_context(session_id):
    images = Image.objects.order_by('-rating')
    img1 = random.choice(images)
    img2 = random.choice(images)

    c = Context({'img1': img1, 'img2': img2, 'session_id': session_id})
    return c


def start(request):
    c = __get_pair_context(request.GET.get('session_id'))
    t = loader.get_template('start.html')
    return HttpResponse(t.render(c), content_type="text/html")


def rate_img(request):
    img_id = request.GET.get('img_id', None)
    if img_id is not None:
        img_id = int(img_id)
        x = Image.objects.get(id=img_id)
        x.rate()
        x.save()
        c = __get_pair_context(request.GET.get('session_id'))
        t = loader.get_template('comparison.html')
        return HttpResponse(t.render(c), content_type="text/html")
    else:
        return HttpResponse("Something went wrong...", content_type="text/html")