{% extends 'layout.tpl' %} 

{% block favicon %}/lib/img/aps/category/icon.png{% endblock favicon %} {% block meta_title %}Categories{% endblock meta_title %}

{% block meta_description %}Manage categories{% endblock meta_description %}

{% block js %}{% endblock %}

{% block css %}
<link href="/lib/bundles/{{sBundle}}/css/category.css" rel="stylesheet">
{% endblock %}

{% block modal %}
<div class="modal fade" id="modal-category" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-category-content">
            <p>&nbsp;</p>
        </div>
    </div>
</div>
{% endblock %}

{% block main %}
<div class="container">
    <div class="row clearfix transparentBlackBg rounded well ui-transition ui-shadow">
        <div class="col-md-12 column">
            <div class="page-header">
                <h1 class="showOnHover">
                    <img src="/lib/bundles/category/img/icon.png" alt="App icon" />Category <small class="targetToShow">1.0</small>
                </h1>
            </div>
        </div>
        <div class="col-md-12 column">
            <div class="btn-group btn-group-lg">
                <button type="button" class="ui-reload btn btn-lg btn-default">
                    <span class="glyphicon glyphicon-refresh"></span> Raffraichir
                </button>
                <button href="#modal-category" type="button" class="hide btn btn-lg btn-danger ui-sendxhr ui-delete-categorys"
                    data-url="/category/home/delete/" data-selector="#modal-create-content" role="button" data-toggle="modal">
                    <span class="glyphicon glyphicon-trash"></span> Supprimer
                </button>
                <button href="#modal-category" type="button" class="btn btn-lg btn-info ui-sendxhr"
                    data-url="/category/home/create/" data-selector="#modal-category-content" role="button" data-toggle="modal">
                    <span class="glyphicon glyphicon-file"></span> New category
                </button>
            </div>

            <div id="categoryList" class="ui-loadable" data-entity="Category" data-orderby="idcategory" data-order="DESC" data-url="category/home/list">
            </div>
        </div>
    </div>
</div>
{% endblock %}
