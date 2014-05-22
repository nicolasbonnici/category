
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title" id="myModalLabel">Nouvelle catégorie</h4>
</div>
<div id="modal-create-content" class="modal-body">
    <form role="form" id="newTodoForm" action="/crud/create/" data-entity="Todo" data-view="crud/create.tpl"
        method="post">
        <div class="form-group">
            <label>Nom de la catégorie</label> <input type="text" name="label" class="form-control input-lg"
                placeholder="Entrez le nom de votre catégorie" value="{% if title|Exists %}{{title}}{% endif %}" />
        </div>
        {% if oCategories|Exists %}
        <div class="form-group">
            <label>Cétegorie parente</label> 
            <select name="category_idcategory">
            {% for oCategory in oCategories %}
                <option value="{{oEntity.idcategory}}">{{oCategory.label|safe}}</option>
            {% endfor %}
            </select>
        </div>
        {% endif %}
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">{{tr['cancel']}}</button>
    &nbsp;
    <button type="button" class="btn btn-lg btn-primary ui-sendform refreshOnCallback sendNotificationOnCallback"
        data-form="#newTodoForm" title="Enregistrer ce todo">{{tr['save']}}</button>
</div>
