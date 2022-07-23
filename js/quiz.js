function Check(answer) {
    let choose = quiz_form.option.value;
    let check = document.getElementById("check");
    let image = document.getElementsByTagName("img")[0];
    if (choose == answer){
        check.style.visibility = "visible";
    }
    else {
        check.innerHTML = "<img src=\'../images/wrong.png\'>&nbsp;&nbsp;Answer is &nbsp;&nbsp;" + answer;
        check.style.visibility = "visible";
    }
}

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
