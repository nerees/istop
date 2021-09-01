# istop
Prestashop module for adding flags for products and custom text tab

Install MODULE

no configuration needed



in admin product form mark products for badges

---

Place hooks:
---


For product single page add hook in template
````
template: /themes/"YOURTHEME"/templates/catalog/product.tpl

hook: {hook h='nnTopProduct' id_product=$product.id_product}

place the hook whereever You want to display badge
````


For product list add hook in template
````
template: /themes/"YOURTHEME"/templates/catalog/_partials/miniatures/product.tpl

hook: {hook h='nnTopProductMiniature' id_product=$product.id_product}

place the hook whereever You want to display badges

````

For product description plus "Mėnuo/aprašymas" add hook anywhere you want to display text where $product object is available
In my case i was using it for extra description tab
````
{hook h='nnProductDescriptionPlus' id_product=$product.id_product}
````
Contact me if You want any explanation on what is going on with this :)

