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
	<h1>Formulario guardado</h1>
	<p class="lead">{{nombre}}, le atenderemos lo antes posible.</p>
	<p class="lead">Se lo mandaremos a la dirección suministrada ({{email}})</p>
</div>
{% endblock cuerpo %}

