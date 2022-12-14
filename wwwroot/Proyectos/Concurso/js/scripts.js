/*!
* Start Bootstrap - Small Business v5.0.5 (https://startbootstrap.com/template/small-business)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-small-business/blob/master/LICENSE)
*/
const questionCards=["q1","q2","q3","q4"];
const questions=["a1","a2","a3","a4"];
const solutions=["Mark Zuckerberg","Ronald Wayne","2007","1992"];
const answers=["question1","question2","question3","question4"];
const correct=["corrAns1","corrAns2","corrAns3","corrAns4"];
const wrong=["wrongAns1","wrongAns2","wrongAns3","wrongAns4"];
let check;
let option="";
let aux;
/*Randomiza las preguntas*/
for(let i=0;i<questionCards.length;i++){
    let questionCardId=questionCards[i];
    questionCardId = "#" + questionCardId;
let questionCard = document.querySelector(questionCardId);

for (let i = questionCard.children.length; i >= 0; i--) {
    questionCard.appendChild(questionCard.children[Math.random() * i | 0]);
    }
}

for(let i=0;i<questions.length;i++){
    let quest=questions[i];
    quest = "#" + quest;
    let questionAnswers = document.querySelector(quest);
    for (let i = questionAnswers.children.length; i >= 0; i--) {
        questionAnswers.appendChild(questionAnswers.children[Math.random() * i | 0]);
    }
}
/*Desactiva los radio buttons de las preguntas correctas*/
function disab(question){
    question.setAttribute("disabled","disabled");
}

function checkResults(){
    let score=0;
    let wrongScore=0;
    try {
        for (let i = 0; i < answers.length; i++) {
            aux = option.concat("input[name=", '"', answers[i], '"', "]");
            console.log(aux);
            check = document.querySelector(aux + ":checked");
            console.log(check.value);
            if (check.value === solutions[i]) {
                let answ = document.querySelectorAll(aux);
                answ.forEach(disab);
                document.getElementById(correct[i]).hidden = false;
                document.getElementById(wrong[i]).hidden = true;
                score++;
            } else {
                document.getElementById(correct[i]).hidden = true;
                document.getElementById(wrong[i]).hidden = false;
                wrongScore++;
            }
            if (score === 2) {
                document.getElementById("nextRound").hidden = false;
                document.getElementById("failRound").hidden = true;
                document.getElementById("q3").hidden = false;
                document.querySelectorAll(aux).checked = false;
                wrongScore=0;
            }
            if (score === 4) {
                document.getElementById("nextRound").hidden = true;
                document.getElementById("failRound").hidden = true;
                document.getElementById("q3").hidden = false;
                document.getElementById("end").hidden = false;
                document.getElementById("checkResult").hidden = true;
                document.getElementById("errDiv").hidden=true;
            }
        }

        //Type error null check
    } catch (e) {
        if(wrongScore===2){
            document.getElementById("errDiv").hidden=true;
        }
        else{
            document.getElementById("error").innerHTML="Please select an option";
            //document.getElementById("error").innerHTML=e;
            document.getElementById("errDiv").hidden=false;
            document.getElementById("errDiv").className="bg-danger";
        }
    }
}

