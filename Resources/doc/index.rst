- Add the stylesheet in the <head> tag of your "layout.html.twig"

<head>
{% block stylesheets %}
.... here your others stylesheets
<link rel="stylesheet" href="/bundles/[ YOUR-NAMESCAPE ]switchlocale/css/switch-locale.css" type="text/css" media="all" />
{% endblock %}
</head>