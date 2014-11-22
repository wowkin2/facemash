from django.db import models

class Image(models.Model):
    number = models.IntegerField()
    path = models.CharField(max_length=200)
    rating = models.IntegerField(default=0)

    def __str__(self):
        return self.path

    def rate(self):
        self.rating += 1