from django.contrib import admin
from core.models import Artist

# Register your models here.

class ArtistAdmin(admin.ModelAdmin) :
    list_display =  ('name', 'date_joined')



admin.site.register(Artist, ArtistAdmin)

