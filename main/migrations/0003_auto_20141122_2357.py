# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('main', '0002_image_rate'),
    ]

    operations = [
        migrations.RenameField(
            model_name='image',
            old_name='rate',
            new_name='rating',
        ),
    ]
