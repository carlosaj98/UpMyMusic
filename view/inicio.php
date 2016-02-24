{% extends "layout.php" %}

{% block tabActivo %}inicio{% endblock tabActivo %}

{% block cuerpo %}

{% if message %}
	<div class="alert alert-success" role="alert"> {{ message|raw}}</div>
{% endif %}

{% if error %}
	<div class="alert alert-error" role="alert"> {{ error|raw}}</div>
{% endif %}

<div class="jumbotron">
	<h1>UpMyMusic</h1>
	<p class="lead">Sube y Descarga tu música sin copyright</p>
	

{% for comentario in lineas %}
		{% for clave,valor in comentario %}
			{{ clave }}: {{ valor }} <br>
		    {% endfor %}
		    <a href="/borrar?id={{comentario.ID}}"><img width="32px" src="http://findicons.com/files/icons/2226/matte_basic/32/trash_can1.png"></a><br>
		----------------<br>
		{% endfor %}
	
</div>
{% endblock cuerpo %}

