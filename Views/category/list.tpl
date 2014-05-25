{% if oEntities|Exists %} 
    {% for oCategory in oEntities %}
    <div class="ui-item transparentBlackBg padding rounded col-md-12">
        {#<input type="checkbox" class="ui-select todos form-control input-lg" data-delete-selector=".ui-delete-todos" data-select-parent="#todoList" name="idcategory" value="{{oCategory.idcategory}}" />#}
        <h3><span class="glyphicon glyphicon-folder-open"></span> {{oCategory.label}}</h3>
        <div class="btn-group">
            <a href="#modal-category" class="ui-sendxhr btn btn-info btn-sm" data-url="/category/home/update/"
                data-selector="#modal-todo-content" data-toggle="modal" data-idcategory="{{oCategory.idcategory}}"
                title="{{tr['edit']}}"> <span class="glyphicon glyphicon-pencil"></span> Update
            </a>
            <a href="#" class="ui-sendxhr btn btn-danger btn-sm sendNotificationOnCallback" data-url="/crud/delete/" data-entity="Category" data-pk="{{oCategory.idcategory}}"
                title="{{tr['delete']}}"> <span class="glyphicon glyphicon-trash"></span> Delete
            </a>
        </div>
    </div>
    {% endfor %}
{% else %}
<tr>
    <td>Aucun enregistrement</td>
</tr>
{% endif %}
