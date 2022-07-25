// function Check(answer) {
//     let choose = quiz_form.option.value;
//     let check = document.getElementById("check");
//     let image = document.getElementsByTagName("img")[0];
//     if (choose == answer){
//         check.style.visibility = "visible";
//     }
//     else {
//         check.innerHTML = "<img src=\'../images/wrong.png\'>&nbsp;&nbsp;Answer is &nbsp;&nbsp;" + answer;
//         check.style.visibility = "visible";
//     }
// }

function popBox() {
    let popBox = document.getElementById("popBox");
    let popLayer = document.getElementById("popLayer");
    popBox.style.display = "block";
    popLayer.style.display = "block";
}

function show() {
    window.location.href = "grade.php";
}

function home(){
    window.location.href="../index.php";
}
//
// function showlist(list){
//     let table_head = document.getElementById("table_head");
//     let len = list.length;
//     for (var i = 0; i < len; i++){
//         var tr = document.createElement("tr");
//         for(var j =0; j < 3; j++) {
//             var td = document.createElement("td");
//             td.innerHTML=list[i][j];
//             tr.appendChild(td);
//         }
//         table_head.appendChild(tr);
//     }
//     document.getElementById('show_wrong').hidden=false;
// }

function showlist(id){
    window.location.href="../php/showwrong.php?id="+id;
}
