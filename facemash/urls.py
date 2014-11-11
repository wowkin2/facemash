from django.conf.urls import patterns, include, url
from django.contrib import admin
from views import *

urlpatterns = patterns('',
# start page
    url(r'^$', home, name='home'),
    url(r'^home$', home, name='home'),
    
# open two images side by side 
    url(r'^start$', start, name='start'),
    
# refresh list of present images
    url(r'^refresh$', refresh, name='refresh'),

# send mail
    # url(r'^send/', send, name='send'),
    
    url(r'^admin/', include(admin.site.urls)),
)
