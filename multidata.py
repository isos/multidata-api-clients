import requests

dato="11111111-1" #Rut a consultar.

headers = {'Authorization': 'TU API KEY',} #Debe obtener la llave para acceder al api.
url = requests.get('http://api.multidatachile.com/persons/jsongetowners/%s' % dato, headers=headers) #Mandamos el metodo y el api key con la url.
respuesta=url.text # tomar la respuesta a nuestra peticion.

data     = json.loads(respuesta) #trabajar la respuesta en JSON.
print "Nombre :" + data['0']['Name']
