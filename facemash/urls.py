from django.conf.urls import patterns, include, url
from django.contrib import admin
#from facemash.Image.views import *

urlpatterns = patterns('',
    url(r'', include('main.urls')),
    url(r'^main/', include('main.urls')),
    url(r'^admin/', include(admin.site.urls)),
)
