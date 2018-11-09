from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def pcup_home(request):
	return render(request,'PCup_Home.html')