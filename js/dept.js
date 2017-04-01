/**
 * Created by noama on 01/04/2017.
 */
var dept_id=0;
var wrap=document.getElementById("wrapper");
function createComponents() {
    var org = document.getElementById("dept"+dept_id);
    var clone = org.cloneNode(true);
    clone.id="dept"+ ++dept_id;
    clone.onClick = createComponents;
    org.parentNode.appendChild(clone);
    wrap.appendChild(org);
}