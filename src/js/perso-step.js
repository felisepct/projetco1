let filterItemsSelector = ".filterItem";
let filterItems = document.querySelectorAll(filterItemsSelector);

filterItems.forEach(function(item){
    item.addEventListener("click", function(e){
        let attribute = this.dataset.attribute;
        let value = this.dataset.value;
        Array.prototype.slice.call(this.parentNode.children).forEach(function(child){
            child.classList.remove("-active");
        });
        this.classList.add("-active");

        if(attribute === "couleur-du-bracelet"){
            changeImage(value, ".watch__strap");
        } 
        if(attribute === "couleur-du-cadran"){
            changeImage(value, ".watch__dial");
        }

        let select = document.getElementById(attribute);
        select.value = value; 

        jQuery(select).trigger("change.wc-variation-form");
        console.log("trigger")
    })
})


let changeImage = function(color, selector){
    let image = document.querySelector(selector);
    let src = image.dataset.source;
    src = src.replace("{color}", color);
    image.src = src;
}


let addToCartSelector = "add-product-to-cart";
let buttonAddToCart = document.getElementById(addToCartSelector);

buttonAddToCart.addEventListener("click", function(){
    document.querySelector(".variations_form").submit();
})

jQuery(document).on("show_variation", function(){
    let selector = ".woocommerce-variation-price .woocommerce-Price-amount";
    let price = document.querySelector(selector).innerHTML;
    document.getElementById("product-final-price").innerHTML = price;
})


let stepButtonSelector = ".step__button";
let stepButtons = document.querySelectorAll(stepButtonSelector);

console.log(stepButtons);

stepButtons.forEach(function(button){
    button.addEventListener("click", function(){
        let currentStep = parseInt(this.dataset.step);
        if(!history.state){
            history.pushState(currentStep, null, null);
        }
        nextStep(currentStep+1, true);
    })
});


let nextStep = function(step , pushToHistory){
    let stepSelector = ".step";
    let currentStepSelector = ".current-step";
    document.querySelector(currentStepSelector).innerHTML = step;
    document.querySelectorAll(stepSelector).forEach(function(divStep){
        divStep.style.display = "none";
    })
    document.getElementById("step-"+step).style.display = "block";

    if(pushToHistory){
        history.pushState(step, null, null);
    }
   

}
window.addEventListener("popstate", function(e){
    console.log(e.state);
    if(e.state != null){
        nextStep(e.state, false)
    }
})
