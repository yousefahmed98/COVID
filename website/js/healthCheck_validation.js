function validateQuestForm() {
    var sex = document.forms["QuestForm"]["options1"].value;
    var date = document.forms["QuestForm"]["date"].value;

    if (sex == ""||date=="") {
      alert("Name must be filled out");
      return false;
    }
    
  } 