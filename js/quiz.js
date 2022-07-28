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

function show() {
    window.location.href = "../php/grade.php";
}

function home(){
    window.location.href="../index.php";
}

function del(id,creator){
    window.location.href="../php/delete.php?id="+id+"&creator="+creator;
}

function update(id,creator){
    window.location.href="../php/updatequestion.php?id="+id+"&creator="+creator;
}

function add(){
    window.location.href="../php/addquestion.php";
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
