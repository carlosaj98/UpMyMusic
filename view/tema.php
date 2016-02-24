{% extends "layout.php" %}

{% block tabActivo %}crear{% endblock tabActivo %}

{% block cuerpo %}

<h1>Busca una canción</h1>
	<form action="/solicitarTema" method="post">

				
<div>
		<label for="g2-nombre" class="grunion-field-label name">Nombre del Tema</span></label>
		<input name="nombre" id="g2-nombre" value="" class="name"   type="text">
	</div>

				
<div>
		<label for="g2-género" class="grunion-field-label email">Género</span></label>
		<input name="género" id="g2-género" value="" class="name" required="" type="text">
	</div>
	
	<p class="contact-submit">
		<input value="Enviar »" class="pushbutton-wide" type="submit">
		<input id="_wpnonce" name="_wpnonce" value="5f140700ae" type="hidden"><input name="_wp_http_referer" value="/about/" type="hidden">
		<input name="contact-form-id" value="2" type="hidden">
		<input name="action" value="grunion-contact-form" type="hidden">
	</p>
</form>

{% endblock cuerpo %}
