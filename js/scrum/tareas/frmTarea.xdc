{
    "xdsVersion": "1.1.2",
    "internals": {
        "cid": "form",
        "jsClass": "frmTarea",
        "snapToGrid": 10,
        "userConfig": {
            "title": "-ext-undefined-",
            "frame": "-ext-undefined-",
            "bodyStyle": "padding:8px;border-width:0 0px 0px 0px;",
            "style": "border-width:0 0px 0px 1px;",
            "border": false
        },
        "userXType": "frmTarea",
        "cn": [
            {
                "cid": "textfield",
                "jsClass": "MyTextField2",
                "snapToGrid": 10,
                "userConfig": {
                    "fieldLabel": "Id",
                    "anchor": "100%",
                    "autoRef": "txtId",
                    "name": "id",
                    "hidden": "-ext-undefined-"
                }
            },
            {
                "cid": "textfield",
                "jsClass": "MyTextField4",
                "snapToGrid": 10,
                "userConfig": {
                    "fieldLabel": "Padre",
                    "anchor": "100%",
                    "name": "fk_historia",
                    "autoRef": "txtPadre"
                }
            },
            {
                "cid": "textfield",
                "jsClass": "MyTextField4",
                "snapToGrid": 10,
                "userConfig": {
                    "fieldLabel": "Proyecto",
                    "anchor": "100%",
                    "name": "fk_proyecto",
                    "autoRef": "txtProyecto"
                }
            },
            {
                "cid": "textarea",
                "jsClass": "MyTextField",
                "snapToGrid": 10,
                "userConfig": {
                    "fieldLabel": "Descripcion",
                    "anchor": "100%",
                    "name": "descripcion",
                    "allowBlank": false,
                    "style": "",
                    "labelStyle": "font-weight:bold;",
                    "maxLength": 255,
                    "growMax": 255,
                    "autoCreate": "{tag:'textarea',  maxlength:250}",
                    "autoRef": "txtDescripcion"
                }
            },
            {
                "cid": "textfield",
                "jsClass": "MyTextField2",
                "snapToGrid": 10,
                "userConfig": {
                    "fieldLabel": "Prioridad",
                    "anchor": "-ext-undefined-",
                    "width": 50,
                    "name": "prioridad",
                    "autoRef": "txtPrioridad"
                }
            },
            {
                "cid": "combobox",
                "jsClass": "MyTextField3",
                "snapToGrid": 10,
                "userConfig": {
                    "fieldLabel": "Estado",
                    "anchor": "-ext-undefined-",
                    "name": "estado",
                    "autoRef": "txtEstado",
                    "width": "-ext-undefined-"
                }
            }
        ]
    },
    "linkedNodes": {},
    "boundStores": {}
}