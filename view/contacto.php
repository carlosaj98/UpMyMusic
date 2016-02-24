 {% extends "layout.php" %}

{% block tabActivo %}crear{% endblock tabActivo %}

{% block cuerpo %}

<h1>Registrate aqui</h1>
	<form action="/solicitarContacto" method="post">

				
<div>
		<label for="g2-nombre" class="grunion-field-label name">Nombre</span></label>
		<input name="nombre" id="g2-nombre" value="" class="name"   type="text">
	</div>

				
<div>
		<label for="g2-correo" class="grunion-field-label email">Correo<span>(requerido)</span></label>
		<input name="correo" id="g2-correo" value="" class="email" required="" aria-required="true" type="email">
	</div>
	
<div>
		<label for="contact-form-comment-g2-mensaje" class="grunion-field-label textarea">Mensaje</label>
		<textarea name="mensaje" id="contact-form-comment-g2-mensaje" rows="10"></textarea>
	</div>
	<p class="contact-submit">
		<input value="Enviar »" class="pushbutton-wide" type="submit">
		<input id="_wpnonce" name="_wpnonce" value="5f140700ae" type="hidden"><input name="_wp_http_referer" value="/about/" type="hidden">
		<input name="contact-form-id" value="2" type="hidden">
		<input name="action" value="grunion-contact-form" type="hidden">
	</p>
</form>
{% endblock cuerpo %}
