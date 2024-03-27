// this js file for family_data.php
// *********************************

"use strict";

window.onload = function () {
  //:: setting pages :: //

  //1-disable all inputs , selects and textarea
  const inputs = document.getElementsByTagName("input");
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].disabled = "true";
  }
  const selects = document.getElementsByTagName("select");
  for (var i = 0; i < selects.length; i++) {
    selects[i].disabled = "true";
  }

  const textArea = document.getElementsByTagName("textarea");
  for (var i = 0; i < textArea.length; i++) {
    textArea[i].disabled = "true";
  }

  //2-hide all sections and display one you click:
  const allDivs = document.querySelectorAll(".sec_data");
  // alert(allDivs.length);
  for (var i = 0; i < allDivs.length; i++) {
    allDivs[i].classList.add("d-none");
  }
  //-----------------------------------------------

  //3- add click event to all btn in head of sections
  const btns = document.querySelectorAll(".btns");
  btns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      const sec = document.getElementById(btn.getAttribute("sec"));
      console.log(sec);
      if (sec.classList.contains("d-none")) {
        sec.classList.remove("d-none");
      } else {
        sec.classList.add("d-none");
      }
    });
  });

  //4- add click event to all edit-btn to enabled inputs and selects
  const editBtns = document.querySelectorAll(".edit-buttons");
  editBtns.forEach(function (editBtn) {
    editBtn.addEventListener("click", function () {
      const selectedSec = document.getElementById(editBtn.getAttribute("sec"));
      var inputElements = selectedSec.getElementsByTagName("input");
      var selectElements = selectedSec.getElementsByTagName("select");
      var textAreaEle = selectedSec.getElementsByTagName("textarea");
      // Enable input elements
      for (var i = 0; i < inputElements.length; i++) {
        if (inputElements[i].disabled == false) {
          inputElements[i].disabled = true;
        } else {
          inputElements[i].disabled = false;
        }
      }

      // Enable select elements
      for (var i = 0; i < selectElements.length; i++) {
        if (selectElements[i].disabled == false) {
          selectElements[i].disabled = true;
        } else {
          selectElements[i].disabled = false;
        }
      }

      // Enable textarea elements

      for (var i = 0; i < textAreaEle.length; i++) {
        if (textAreaEle[i].disabled == false) {
          textAreaEle[i].disabled = true;
        } else {
          textAreaEle[i].disabled = false;
        }
      }
      //switch edit-button to cancel
      if (this.classList.contains("btn-warning")) {
        this.classList.remove("btn-warning");
        this.classList.add("btn-danger");
        this.innerHTML = "الغاء";
      } else {
        this.classList.remove("btn-danger");
        this.classList.add("btn-warning");
        this.innerHTML = "تعديل";
      }
    });
  });

  //5- set red border to elemnt no data
  const allForms = document.querySelectorAll("form");
  // var allsubmits = document.querySelectorAll('input[type="submit"]');
  // alert(allsubmits.length);
  // alert('All submitted ='+allForms.length)

  allForms.forEach(function (e) {
    e.addEventListener("click", function () {
      const form = document.getElementById(e.getAttribute("id"));
      var allinputs = form.querySelectorAll('input[type="text"]');
      var allNumbers = form.querySelectorAll('input[type="number"]');
      var allDates = form.querySelectorAll('input[type="date"]');
      var allSelects = form.querySelectorAll("select");
      var noteTextArea = document.querySelector("#visit_note");
      for (var i = 0; i < allinputs.length; i += 1) {
        if (allinputs[i].value == null || allinputs[i].value == "") {
          allinputs[i].style.border = "2px solid red";
        } else {
          allinputs[i].style.border = "2px solid green";
        }
      }

      for (var i = 0; i < allNumbers.length; i += 1) {
        if (allNumbers[i].value == null || allNumbers[i].value == "") {
          allNumbers[i].style.border = "2px solid red";
        } else {
          allNumbers[i].style.border = "2px solid green";
        }
      }

      for (var i = 0; i < allSelects.length; i += 1) {
        if (allSelects[i].value == null) {
          allSelects[i].style.border = "2px solid red";
        } else {
          allSelects[i].style.border = "2px solid green";
        }
      }
      //not working ???
      //test:
      //console.log(document.getElementById('father_birthday'));
      for (var i = 0; i < allDates.length; i += 1) {
        // alert(allDates[i].value);
        if (allDates[i].value == "0000-00-00" || allDates=="null") {
          allDates[i].style.border = "px solid red";
        } else {
          allDates[i].style.border = "2px solid green";
        }
      }
      if(noteTextArea){
        if (noteTextArea.innerHTML == null || noteTextArea.innerHTML == "") {
          noteTextArea.style.border = "2px solid red";
        } else {
          noteTextArea.style.border = "2px solid green";
        }
      }

    });
  });
  const sections = document.getElementsByClassName("sec_data");
  // const sec1_form = document.getElementById("sec1_form");
  // const sec1_data = document.getElementById("sec1_data");
  const btn_edit = document.querySelectorAll(".btn_edit");
  // const sec1_edit_btn = document.getElementById("sec1_edit_btn");
  // const sec1_form_save = document.getElementById("sec1_form_save");
  const form_cancel = document.querySelectorAll(".form_cancel");

  //   btn_edit.forEach(function (e) {
  //     e.addEventListener("click", function () {
  //       showSection(e.getAttribute("sec_form"));
  //     });
  //   });

  //   form_cancel.forEach(function (e) {
  //     e.addEventListener("click", function () {
  //       hideSection(e.getAttribute("sec_form"));
  //     });
  //   });

  // sec1_edit_btn.addEventListener("click", function(){
  //   // sec1_data.style.display = "none";

  // for (var i=0;i<sections.length;i+=1){
  //   sections[i].style.display = 'none';
  // }
  //   // this.style.display="none";
  //   sec1_form.style.display = "block";
  // });
  function showSection(section_id) {
    const sec_form = document.getElementById(section_id);
    for (var i = 0; i < sections.length; i += 1) {
      sections[i].style.display = "none";
    }
    sec_form.style.display = "block";
  }

  function hideSection(section_id) {
    const sec_form = document.getElementById(section_id);
    for (var i = 0; i < sections.length; i += 1) {
      sections[i].style.display = "block";
    }
    sec_form.style.display = "none";
  }

  // sec1_form_save.addEventListener("click", function(){
  // // document.location.reload();
  // alert("تم حفظ البيانات بنجاح");
  // for (var i=0;i<sections.length;i+=1){
  //   sections[i].style.display = 'block';
  // }
  // sec1_form.style.display = "none";
  // });

  //check status of selected list

  const selectedList = document.querySelectorAll(".selectedList"); //for all list display none divs with 0 value
  selectedList.forEach(function (e) {
    // set display of inputs field depending on selected value from database:
    showInputs(e.getAttribute("id"));
    // change display of inputs field depending on selected value :
    e.addEventListener("change", function () {
      showInputs(e.getAttribute("id"));
    });
  });

  function showInputs(id) {
    const selectedList = document.getElementById(id);
    const divName = document.getElementById(
      selectedList.getAttribute("div_name")
    );
    var inputElements = divName.getElementsByTagName("input");
    // alert(inputElements.length); //for testing purposes
    if (selectedList.value == 0) {
      // ليست خاصة بالعائل ، اذا كان العائل الام نضع ٠ في باقي الخانات

      for (var i = 0; i < inputElements.length; i++) {
        // loop through input elements and make value = 0
        inputElements[i].value = "0";
      }
      divName.style.display = "none";
    } else {
      divName.style.display = "flex";
    }
  }

  // national address selected value (1=yes , 0=no) select_nat_address
  const yes_no_select = document.querySelectorAll(".yes_no_select"); // select element containing yes(1) or no(0)
  // alert(yes_no_select);
  yes_no_select.forEach(function (e) {
    // set display of inputs field depending on selected value from database:

    showFormInputs(e.getAttribute("id"));

    // change display of inputs field depending on selected value :
    e.addEventListener("change", function () {
      // alert(e.getAttribute("id"));
      showFormInputs(e.getAttribute("id"));
    });
  });

  function showFormInputs(id) {
    const selectedYesNo = document.getElementById(id); //get select element by id and have atributes called div_name
    // alert(selectedYesNo.getAttribute("div_name") + ' : '+selectedYesNo.id);
    const divName = document.getElementById(
      selectedYesNo.getAttribute("div_name")
    );
    var inputElements = divName.getElementsByTagName("input");
    var selectElemnts = divName.getElementsByTagName("select");
    //alert(selectElemnts);
    if (selectedYesNo.value == 0) {
      for (var i = 0; i < inputElements.length; i++) {
        // loop through input elements and make value = 0
        inputElements[i].value = "0";
      }
      for (var i = 0; i < selectElemnts.length; i++) {
        selectElemnts[i].value = null;
      }
      divName.style.display = "none";
    } else {
      divName.style.display = "flex";
    }
  }

  // other selected value (0 = other)
  const otherSelect = document.querySelectorAll(".other_select"); // select element containing yes(1) or no(0)
  otherSelect.forEach(function (e) {
    // set display of inputs field depending on selected value from database:
    showOtherInputs(e.getAttribute("id"));
    // change display of inputs field depending on selected value :
    e.addEventListener("change", function () {
      showOtherInputs(e.getAttribute("id"));
    });
  });

  function showOtherInputs(id) {
    const selectedOther = document.getElementById(id); //get select element by id and have atributes called div_name
    const divName = document.getElementById(
      selectedOther.getAttribute("div_name")
    );
    //this in son.data1 if "خاص":
    const divEduSpecial = document.getElementById("son_school_special");

    if (divEduSpecial) {
      // alert("id=" + selectedOther.id + ' div_name ='+ divName.id);
      divEduSpecial.style.display = "none";
    }

    //-----------

    var inputElements = divName.getElementsByTagName("input");

    if (selectedOther.value == 100) {
      //because other = 100

      divName.style.display = "inline-block";
    } else if (selectedOther.value == "خاص") {
      divEduSpecial.style.display = "inline-block";
    } else {
      // alert(selectedOther.divName2)
      for (var i = 0; i < inputElements.length; i++) {
        // loop through input elements and make value = 0

        inputElements[i].value = "0";
      }
      divName.style.display = "none";
    }
  }

  //page non_data =========
  const selectJobOfNon = document.getElementById("non_job");
  const divNonJobSalary = document.getElementById("non_job_salary");
  if (selectJobOfNon) {
    hideNonJobSalary();
    selectJobOfNon.addEventListener("change", function () {
      hideNonJobSalary();
    });
  }

  function hideNonJobSalary() {
    if (selectJobOfNon.value == "موظف") {
      // alert("id=" + selectedOther.id + ' div_name ='+ divName.id);
      divNonJobSalary.style.display = "inline-block";
    } else {
      divNonJobSalary.style.display = "none";
    }
  }
  //=====================

  // rent selected value (0 = other)
  const rentSelect = document.querySelectorAll(".rent_select"); // select element containing yes(1) or no(0)
  // alert("rentselect = "+rentSelect.length);
  rentSelect.forEach(function (e) {
    showRentInputs(e.getAttribute("id"));

    e.addEventListener("change", function () {
      showRentInputs(e.getAttribute("id"));
    });
  });

  function showRentInputs(id) {
    const selectedRent = document.getElementById(id); //get select element by id and have atributes called div_name
    // alert("selectedRent: " + selectedRent.getAttribute("div_name2"));
    const divName2 = document.getElementById(
      selectedRent.getAttribute("div_name2")
    );
    const inputElements2 = divName2.getElementsByTagName("input");

    // this for rent selected
    if (selectedRent.value == "إيجار") {
      for (var i = 0; i < inputElements2.length; i++) {
        // loop through input elements and make style display = inline-block
      }
      divName2.style.display = "inline-block";
    } else {
      for (var i = 0; i < inputElements2.length; i++) {
        // loop through input elements and make value = 0
        inputElements2[i].value = "0";
      }
      divName2.style.display = "none";
    }
  }

  // edu selected value :
  const eduSelect = document.querySelectorAll(".edu_select"); // select element containing yes(1) or no(0)
  eduSelect.forEach(function (e) {
    showEduInputs(e.getAttribute("id"));

    e.addEventListener("change", function () {
      showEduInputs(e.getAttribute("id"));
    });
  });

  function showEduInputs(id) {
    const selectedEdu = document.getElementById(id); //get select element by id and have atributes called div_name
    const divName1 = document.getElementById(
      selectedEdu.getAttribute("div_name1")
    );
    const divName2 = document.getElementById(
      selectedEdu.getAttribute("div_name2")
    );
    const divName3 = document.getElementById(
      selectedEdu.getAttribute("div_name3")
    );

    // alert(divName1.id+ ' --- ' +divName2.id);
    const inputElements1 = divName1.getElementsByTagName("input");
    const inputElements2 = divName2.getElementsByTagName("input");
    const inputElements3 = divName3.getElementsByTagName("input");

    // this for rent selected

    if (selectedEdu.value == "أمي" || selectedEdu.value == "دون سن الدراسة") {
      //  alert(selectedEdu.value);
      for (var i = 0; i < inputElements1.length; i++) {
        // loop through input elements and make style display = inline-block
        inputElements1[i].value = "0";
        // inputElements[i].value = '0';
      }

      divName1.style.display = "none";
      divName2.style.display = "none";
      divName3.style.display = "none";
    } else if (selectedEdu.value == "منقطع عن الدراسة") {
      divName1.style.display = "inline-block";
      divName2.style.display = "inline-block";
      divName3.style.display = "none";
    } else if (selectedEdu.value == "متخرج") {
      // alert(divName3.id);
      divName3.style.display = "inline-block";
      divName1.style.display = "none";
      divName2.style.display = "none";
    } else {
      divName2.style.display = "inline-block";
      divName1.style.display = "none";
      divName3.style.display = "none";
    }
    // divName2.style.display="flex";
  }

  // edu selected value :
  const hieduSelect = document.querySelectorAll(".hiedu_select"); // hi edu for mom and son
  // console.log(hieduSelect.length);
  hieduSelect.forEach(function (e) {
    showHiEduInputs(e.getAttribute("id"));

    e.addEventListener("change", function () {
      showHiEduInputs(e.getAttribute("id"));
    });
  });

  function showHiEduInputs(id) {
    const selecteHidEdu = document.getElementById(id); //get select element by id and have atributes called div_name
    const divName = document.getElementById(
      selecteHidEdu.getAttribute("div_name")
    );

    // alert(divName1.id+ ' --- ' +divName2.id);
    const inputHiEdu = divName.getElementsByTagName("input");

    // this for saf selected
    const saf = document.getElementById("saf");

    if (
      selecteHidEdu.value == "دبلوم" ||
      selecteHidEdu.value == "بكالوريوس" ||
      selecteHidEdu.value == "ماجستير" ||
      selecteHidEdu.value == "دكتوراه"
    ) {
      divName.style.display = "inline-block";
      if (saf) {
        saf.value = "0";
        saf.style.display = "none";
      }
    } else {
      for (var i = 0; i < inputHiEdu.length; i++) {
        inputHiEdu[i].value = "0";
      }
      divName.style.display = "none";
      if (saf) {
        saf.style.display = "inline-block";
      }
    }
  }

// تخصص المتخرج اذا كان جامعي
const graduateSpecial = document.querySelector("#son_graduate_level");
if(graduateSpecial){
// console.log(graduateSpecial);
  graduate_special();
  graduateSpecial.addEventListener("change",graduate_special);

  function graduate_special(){
  const gr_sp_div= document.getElementById(graduateSpecial.getAttribute('div_name'));
  // console.log(gr_sp_div);
  if(graduateSpecial.value=="المرحلة الجامعية"){
    gr_sp_div.classList.remove('d-none');
  }else{
    // Loop through input elements and set their value to "0"
    const inputElements = gr_sp_div.getElementsByTagName('input');
    for (let i = 0; i < inputElements.length; i++) {
      inputElements[i].value = "0";
    }
    gr_sp_div.classList.add('d-none');
  }
  }
}

  //family_data7 :
  const classSelect = document.querySelectorAll(".class_select");
  // alert(classSelect.length);
  classSelect.forEach(function (e) {
    show_hide_div(e.getAttribute("div_class_name"), e.value);
    e.addEventListener("change", function () {
      show_hide_div(e.getAttribute("div_class_name"), e.value);
    });
  });

  function show_hide_div(className, txtValue) {
    // alert(className+" "+txtValue);
    const divs = document.getElementsByClassName(className);
    
    // alert(divs.length);
    if (txtValue == "لايوجد" || txtValue == "لا") {
      for (let i = 0; i < divs.length; i++) {
        divs[i].classList.add("d-none");
        const inputsInDiv = divs[i].getElementsByTagName("input");
        for (let j = 0; j < inputsInDiv.length; j++) {
          inputsInDiv[j].value = "0"; // Set value to string "0"
        }
   
          }
    } else {
      for (let i = 0; i < divs.length; i++) {
        divs[i].classList.remove("d-none");
      }
    }
  }
  //check id = 10 digits and number only

  var inputFields = document.querySelectorAll(".inputID");
  inputFields.forEach(function (inputField) {
    inputField.addEventListener("keydown", function (event) {
      if (!(event.key >= '0' && event.key <= '9') && event.key !== "." && event.key !== "Backspace") {
        event.preventDefault();
      }
      
      // alert(event.key);
      // if (isNaN(event.key) && event.key !== "Backspace" && event.key !== "." ) {
      //   event.preventDefault();
      // }
      // Get the character code of the key pressed
    // const charCode = event.which || event.keyCode;

    // Allow numbers (0-9), dot (.), and backspace (8)
    // if (charCode >= 48 && charCode <= 57 || charCode === 46 || charCode === 8) {
    //     // Do nothing, let the event proceed
    //     // alert(charCode);
    // } else {
    //     // Prevent the default action of the key press
    //     event.preventDefault();
    // }
    });
  });
};
