const nextButtonfirst = document.querySelector(".next-tab");
nextButtonfirst.addEventListener("click", (e) => {
  const activeTab = document.querySelector(".tab-pane.show.active");
  const nextTab = activeTab.nextElementSibling;
  const tabId = nextTab.getAttribute("id");
  prevButtons.classList.remove("d-none");
  const tab = new bootstrap.Tab(document.getElementById(`${tabId}-tab`));
  if (tabId === "initialinterview") {
    const icon = nextButtonfirst.querySelector("i");
    icon.classList.remove("fa-arrow-right");
    icon.classList.add("fa-save");
    nextButtonfirst.classList.remove("btn-primary");
    nextButtonfirst.classList.add("btn-success");
    nextButtonfirst.type = "submit";
    e.preventDefault();
    tab.show();
  } else {
    tab.show();
    nextButtonfirst.type = "button";
  }
});
const prevButtons = document.querySelector(".prev-tab");
prevButtons.addEventListener("click", () => {
  const activeTab = document.querySelector(".tab-pane.show.active");
  const prevTab = activeTab.previousElementSibling;
  const tabId = prevTab.getAttribute("id");
  const tab = new bootstrap.Tab(document.getElementById(`${tabId}-tab`));
  if (tabId === "Personal") prevButtons.classList.add("d-none");
  const icon = nextButtonfirst.querySelector("i");
  icon.classList.add("fa-arrow-right");
  icon.classList.remove("fa-save");
  nextButtonfirst.classList.add("btn-primary");
  nextButtonfirst.classList.remove("btn-success");
  tab.show();
});
const prevTab1 = document.querySelector(".presonal-dara-link");
prevTab1.addEventListener("click", (event) => {
  event.preventDefault();
  const tab = new bootstrap.Tab(document.getElementById(`Personal-tab`));
  prevButtons.classList.add("d-none");
  const icon = nextButtonfirst.querySelector("i");
  icon.classList.add("fa-arrow-right");
  icon.classList.remove("fa-save");
  nextButtonfirst.classList.add("btn-primary");
  nextButtonfirst.classList.remove("btn-success");
  tab.show();
});
const prevTab2 = document.querySelector(".family-data-link");
prevTab2.addEventListener("click", (event) => {
  event.preventDefault();
  const tab = new bootstrap.Tab(document.getElementById(`Familydata-tab`));
  prevButtons.classList.remove("d-none");
  const icon = nextButtonfirst.querySelector("i");
  icon.classList.add("fa-arrow-right");
  icon.classList.remove("fa-save");
  nextButtonfirst.classList.add("btn-primary");
  nextButtonfirst.classList.remove("btn-success");
  tab.show();
});
const prevTab3 = document.querySelector(".educational-data-link");
prevTab3.addEventListener("click", (event) => {
  event.preventDefault();
  const tab = new bootstrap.Tab(document.getElementById(`Educationaldata-tab`));
  prevButtons.classList.remove("d-none");
  const icon = nextButtonfirst.querySelector("i");
  icon.classList.add("fa-arrow-right");
  icon.classList.remove("fa-save");
  nextButtonfirst.classList.add("btn-primary");
  nextButtonfirst.classList.remove("btn-success");
  tab.show();
});
const prevTab4 = document.querySelector(".health-data-link");
prevTab4.addEventListener("click", (event) => {
  event.preventDefault();
  const tab = new bootstrap.Tab(document.getElementById(`Healthdata-tab`));
  prevButtons.classList.remove("d-none");
  const icon = nextButtonfirst.querySelector("i");
  icon.classList.add("fa-arrow-right");
  icon.classList.remove("fa-save");
  nextButtonfirst.classList.add("btn-primary");
  nextButtonfirst.classList.remove("btn-success");
  tab.show();
});
const prevTab5 = document.querySelector(".ip-and-pwd-checklist-link");
prevTab5.addEventListener("click", (event) => {
  event.preventDefault();
  const tab = new bootstrap.Tab(
    document.getElementById(`IPandPWDchecklist-tab`)
  );
  prevButtons.classList.remove("d-none");
  const icon = nextButtonfirst.querySelector("i");
  icon.classList.add("fa-arrow-right");
  icon.classList.remove("fa-save");
  nextButtonfirst.classList.add("btn-primary");
  nextButtonfirst.classList.remove("btn-success");
  tab.show();
});
const prevTab6 = document.querySelector(".initial-interview-link");
prevTab6.addEventListener("click", (event) => {
  event.preventDefault();
  const tab = new bootstrap.Tab(
    document.getElementById(`initialinterview-tab`)
  );
  const icon = nextButtonfirst.querySelector("i");
  icon.classList.remove("fa-arrow-right");
  icon.classList.add("fa-save");
  nextButtonfirst.type = "submit";
  nextButtonfirst.classList.remove("btn-primary");
  nextButtonfirst.classList.add("btn-success");
  prevButtons.classList.remove("d-none");
  tab.show();
});
// validation for presonal data
$("#txtSurname").on("input", () => {
  const txtSurname = $("#txtSurname").val();
  if (txtSurname.trim().length <= 0) {
    $("#errSurname").text("No blank spaces allowed.");
    $("#txtSurname").addClass("is-invalid");
    $("#surNameReq").text("*");
  } else if (txtSurname.trim().length <= 2) {
    $("#errSurname").text("At least 3 characters required.");
    $("#txtSurname").addClass("is-invalid");
    $("#surNameReq").text("*");
  } else {
    $("#txtSurname").removeClass("is-invalid").addClass("is-valid");
    $("#errSurname").text("");
    $("#surNameReq").text("");
  }
});
$("#txtFirstname").on("input", () => {
  const txtFirstname = $("#txtFirstname").val();
  if (txtFirstname.trim().length <= 0) {
    $("#errFirstname").text("No blank spaces allowed.");
    $("#txtFirstname").addClass("is-invalid");
    $("#firstNameReq").text("*");
  } else if (txtFirstname.trim().length <= 2) {
    $("#errFirstname").text("At least 3 characters required.");
    $("#txtFirstname").addClass("is-invalid");
    $("#firstNameReq").text("*");
  } else {
    $("#txtFirstname").removeClass("is-invalid").addClass("is-valid");
    $("#errFirstname").text("");
    $("#firstNameReq").text("");
  }
});
$("#txtMiddlename").on("input", () => {
  const txtMiddlename = $("#txtMiddlename").val();
  if (txtMiddlename.trim().length <= 0) {
    $("#errMiddlename").text("No blank spaces allowed.");
    $("#txtMiddlename").addClass("is-invalid");
    $("#middleNameReq").text("*");
  } else if (txtMiddlename.trim().length <= 2) {
    $("#errMiddlename").text("At least 3 characters required.");
    $("#txtMiddlename").addClass("is-invalid");
    $("#middleNameReq").text("*");
  } else {
    $("#txtMiddlename").removeClass("is-invalid").addClass("is-valid");
    $("#errMiddlename").text("");
    $("#middleNameReq").text("");
  }
});
$("#txtNickname").on("input", () => {
  const txtNickname = $("#txtNickname").val();
  if (txtNickname.trim().length <= 0) {
    $("#errNickname").text("No blank spaces allowed.");
    $("#txtNickname").addClass("is-invalid");
    $("#nickNameReq").text("*");
  } else if (txtNickname.trim().length <= 2) {
    $("#errNickname").text("At least 3 characters required.");
    $("#txtNickname").addClass("is-invalid");
    $("#nickNameReq").text("*");
  } else {
    $("#txtNickname").removeClass("is-invalid").addClass("is-valid");
    $("#errNickname").text("");
    $("#nickNameReq").text("");
  }
});
$("#txtDateOfBirth").on("input", () => {
  const txtDateOfBirth = $("#txtDateOfBirth").val();
  const date = new Date(txtDateOfBirth);
  const today = new Date();
  if (!txtDateOfBirth) {
    $("#errDatebirth").text("Date of birth is required.");
    $("#txtDateOfBirth").addClass("is-invalid");
    $("#dateOfBirthReq").text("*");
  } else if (date >= today) {
    $("#errDatebirth").text("Date of birth cannot be in the future.");
    $("#txtDateOfBirth").addClass("is-invalid");
    $("#dateOfBirthReq").text("*");
  } else {
    $("#txtDateOfBirth").removeClass("is-invalid").addClass("is-valid");
    $("#errDatebirth").text("");
    $("#dateOfBirthReq").text("");
  }
});
$("#txtAge").on("input", () => {
  const txtAge = $("#txtAge").val();
  if (txtAge.trim().length <= 0) {
    $("#errAge").text("No blank spaces allowed.");
    $("#txtAge").addClass("is-invalid");
    $("#ageReq").text("*");
  } else if (isNaN(txtAge) || txtAge <= 0) {
    $("#errAge").text("Please enter a valid positive number.");
    $("#txtAge").addClass("is-invalid");
    $("#ageReq").text("*");
  } else if (txtAge > 150) {
    $("#errAge").text("Please enter a valid age below 150.");
    $("#txtAge").addClass("is-invalid");
    $("#ageReq").text("*");
  } else {
    $("#txtAge").removeClass("is-invalid").addClass("is-valid");
    $("#errAge").text("");
    $("#ageReq").text("");
  }
});
$("#txtSex").on("input", () => {
  const txtSex = $("#txtSex").val();
  if (txtSex.trim().length <= 0) {
    $("#errSex").text("Choose sex.");
    $("#txtSex").addClass("is-invalid");
    $("#sexReq").text("*");
  } else if (txtSex.trim().length <= 2) {
    $("#errSex").text("At least 3 characters required.");
    $("#txtSex").addClass("is-invalid");
    $("#sexReq").text("*");
  } else {
    $("#txtSex").removeClass("is-invalid").addClass("is-valid");
    $("#errSex").text("");
    $("#sexReq").text("");
  }
});
$("#txtNationality").on("input", () => {
  const txtNationality = $("#txtNationality").val();
  if (txtNationality.trim().length <= 0) {
    $("#errNationality").text("No blank spaces allowed.");
    $("#txtNationality").addClass("is-invalid");
    $("#nationalityReq").text("*");
  } else if (txtNationality.trim().length <= 2) {
    $("#errNationality").text("At least 3 characters required.");
    $("#txtNationality").addClass("is-invalid");
    $("#nationalityReq").text("*");
  } else {
    $("#txtNationality").removeClass("is-invalid").addClass("is-valid");
    $("#errNationality").text("");
    $("#nationalityReq").text("");
  }
});
$("#txtPlaceOfBirth").on("input", () => {
  const txtPlaceOfBirth = $("#txtPlaceOfBirth").val();
  if (txtPlaceOfBirth.trim().length <= 0) {
    $("#errPlaceOfBirth").text("No blank spaces allowed.");
    $("#txtPlaceOfBirth").addClass("is-invalid");
    $("#placeOfBirthReq").text("*");
  } else if (txtPlaceOfBirth.trim().length <= 2) {
    $("#errPlaceOfBirth").text("At least 3 characters required.");
    $("#txtPlaceOfBirth").addClass("is-invalid");
    $("#placeOfBirthReq").text("*");
  } else {
    $("#txtPlaceOfBirth").removeClass("is-invalid").addClass("is-valid");
    $("#errPlaceOfBirth").text("");
    $("#placeOfBirthReq").text("");
  }
});
$("#txtCivilStatus").on("input", () => {
  const txtCivilStatus = $("#txtCivilStatus").val();
  if (txtCivilStatus.trim().length <= 0) {
    $("#errCivilStatus").text("No blank spaces allowed.");
    $("#txtCivilStatus").addClass("is-invalid");
    $("#civilSatusReq").text("*");
  } else if (txtCivilStatus.trim().length <= 2) {
    $("#errCivilStatus").text("At least 3 characters required.");
    $("#txtCivilStatus").addClass("is-invalid");
    $("#civilSatusReq").text("*");
  } else {
    $("#txtCivilStatus").removeClass("is-invalid").addClass("is-valid");
    $("#errCivilStatus").text("");
    $("#civilSatusReq").text("");
  }
});
$("#txtReligion").on("input", () => {
  const txtReligion = $("#txtReligion").val();
  if (txtReligion.trim().length <= 0) {
    $("#errReligion").text("No blank spaces allowed.");
    $("#txtReligion").addClass("is-invalid");
    $("#religionReq").text("*");
  } else if (txtReligion.trim().length <= 2) {
    $("#errReligion").text("At least 3 characters required.");
    $("#txtReligion").addClass("is-invalid");
    $("#religionReq").text("*");
  } else {
    $("#txtReligion").removeClass("is-invalid").addClass("is-valid");
    $("#errReligion").text("");
    $("#religionReq").text("");
  }
});
$("#txtHomeAddress").on("input", () => {
  const txtHomeAddress = $("#txtHomeAddress").val();
  if (txtHomeAddress.trim().length <= 0) {
    $("#errHomeAddress").text("No blank spaces allowed.");
    $("#txtHomeAddress").addClass("is-invalid");
    $("#homeAddressReq").text("*");
  } else if (txtHomeAddress.trim().length <= 2) {
    $("#errHomeAddress").text("At least 3 characters required.");
    $("#txtHomeAddress").addClass("is-invalid");
    $("#homeAddressReq").text("*");
  } else {
    $("#txtHomeAddress").removeClass("is-invalid").addClass("is-valid");
    $("#errHomeAddress").text("");
    $("#homeAddressReq").text("");
  }
});
$("#txtHomeAddessTelNo").on("input", () => {
  const txtHomeAddessTelNo = $("#txtHomeAddessTelNo").val();
  if (txtHomeAddessTelNo.trim().length <= 0) {
    $("#errHomeAddresstel").text("No blank spaces allowed.");
    $("#txtHomeAddessTelNo").addClass("is-invalid");
    $("#homeAddresstelReq").text("*");
  } else if (txtHomeAddessTelNo.trim().length <= 10) {
    if (txtHomeAddessTelNo === "N/A" || txtHomeAddessTelNo === "n/a") {
      $("#txtHomeAddessTelNo").removeClass("is-invalid").addClass("is-valid");
      $("#errHomeAddresstel").text("");
      $("#homeAddresstelReq").text("");
    } else {
      $("#errHomeAddresstel").text("At least 11 numbers required.");
      $("#txtHomeAddessTelNo").addClass("is-invalid");
      $("#homeAddresstelReq").text("*");
    }
  } else if (isNaN(txtHomeAddessTelNo)) {
    $("#errHomeAddresstel").text("Please enter a valid positive number.");
    $("#txtHomeAddessTelNo").addClass("is-invalid");
    $("#homeAddresstelReq").text("*");
  } else {
    $("#txtHomeAddessTelNo").removeClass("is-invalid").addClass("is-valid");
    $("#errHomeAddresstel").text("");
    $("#homeAddresstelReq").text("");
  }
});
$("#txtBoardingHouseAddress").on("input", () => {
  const txtBoardingHouseAddress = $("#txtBoardingHouseAddress").val().trim();
  if (txtBoardingHouseAddress.length <= 0) {
    $("#errBoardHouseAdd").text(
      "This field cannot be blank. (Type N/A if not applicable.)"
    );
    $("#txtBoardingHouseAddress").addClass("is-invalid");
    $("#boardHouseAddReq").text("*");
  } else {
    $("#txtBoardingHouseAddress")
      .removeClass("is-invalid")
      .addClass("is-valid");
    $("#errBoardHouseAdd").text("");
    $("#boardHouseAddReq").text("");
  }
});
$("#txtBoardingAddressTelNo").on("input", () => {
  const txtBoardingAddressTelNo = $("#txtBoardingAddressTelNo").val();
  if (txtBoardingAddressTelNo.trim().length <= 0) {
    $("#errBoardHouseAddTel").text(
      "This field cannot be blank. (Type N/A if not applicable.)"
    );
    $("#txtBoardingAddressTelNo").addClass("is-invalid");
    $("#boardHouseAddTelReq").text("*");
  } else if (txtBoardingAddressTelNo.trim().length <= 10) {
    if (txtBoardingAddressTelNo === "N/A") {
      $("#txtBoardingAddressTelNo")
        .removeClass("is-invalid")
        .addClass("is-valid");
      $("#errBoardHouseAddTel").text("");
      $("#boardHouseAddTelReq").text("");
    } else {
      $("#errBoardHouseAddTel").text("At least 11 numbers required.");
      $("#txtBoardingAddressTelNo").addClass("is-invalid");
      $("#boardHouseAddTelReq").text("*");
    }
  } else if (isNaN(txtBoardingAddressTelNo)) {
    $("#errBoardHouseAddTel").text("Please enter a valid positive number.");
    $("#txtBoardingAddressTelNo").addClass("is-invalid");
    $("#boardHouseAddTelReq").text("*");
  } else {
    $("#txtBoardingAddressTelNo")
      .removeClass("is-invalid")
      .addClass("is-valid");
    $("#errBoardHouseAddTel").text("");
    $("#boardHouseAddTelReq").text("");
  }
});
$("#txtNameOfLandloard").on("input", () => {
  const txtNameOfLandloard = $("#txtNameOfLandloard").val();
  if (txtNameOfLandloard.trim().length <= 0) {
    $("#errNameOfLandlord").text(
      "No spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtNameOfLandloard").addClass("is-invalid");
    $("#nameOfLandlordReq").text("*");
  } else {
    $("#txtNameOfLandloard").removeClass("is-invalid").addClass("is-valid");
    $("#errNameOfLandlord").text("");
    $("#nameOfLandlordReq").text("");
  }
});
$("#txtLandlordRelation").on("input", () => {
  const txtLandlordRelation = $("#txtLandlordRelation").val();
  if (txtLandlordRelation.trim().length <= 0) {
    $("#errLandlordrelation").text(
      "No spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtLandlordRelation").addClass("is-invalid");
    $("#landlordrelationReq").text("*");
  } else {
    $("#txtLandlordRelation").removeClass("is-invalid").addClass("is-valid");
    $("#errLandlordrelation").text("");
    $("#landlordrelationReq").text("");
  }
});
$("#txtHobbies").on("input", () => {
  const txtHobbies = $("#txtHobbies").val();
  if (txtHobbies.trim().length <= 0) {
    $("#errhobbies").text("No spaces allowed. (Type N/A if not applicable.)");
    $("#txtHobbies").addClass("is-invalid");
    $("#hobbiesReq").text("*");
  } else {
    $("#txtHobbies").removeClass("is-invalid").addClass("is-valid");
    $("#errhobbies").text("");
    $("#hobbiesReq").text("");
  }
});
$("#txtDescribeYourself").on("input", () => {
  const txtDescribeYourself = $("#txtDescribeYourself").val();
  if (txtDescribeYourself.trim().length <= 0) {
    $("#errDescribeYourself").text(
      "No spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtDescribeYourself").addClass("is-invalid");
    $("#describeYourselfReq").text("*");
  } else {
    $("#txtDescribeYourself").removeClass("is-invalid").addClass("is-valid");
    $("#errDescribeYourself").text("");
    $("#describeYourselfReq").text("");
  }
});
// End personal data
// validation for family data
// Father
$("#txtFather_f").on("input", () => {
  const txtFather_f = $("#txtFather_f").val();
  if (txtFather_f.trim().length <= 0) {
    $("#fatherNameReq_f").text("*");
    $("#errFatherName_f").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtFather_f").addClass("is-invalid");
  } else if (txtFather_f.trim().length <= 2) {
    $("#fatherNameReq_f").text("*");
    $("#errFatherName_f").text("At least 3 characters required.");
    $("#txtFather_f").addClass("is-invalid");
  } else {
    $("#fatherNameReq_f").text("");
    $("#errFatherName_f").text("");
    $("#txtFather_f").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtAddress_f").on("input", () => {
  const txtAddress_f = $("#txtAddress_f").val();
  if (txtAddress_f.trim().length <= 0) {
    $("#addressReq_f").text("*");
    $("#errAddress_f").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtAddress_f").addClass("is-invalid");
  } else if (txtAddress_f.trim().length <= 2) {
    $("#addressReq_f").text("*");
    $("#errAddress_f").text("At least 3 characters required.");
    $("#txtAddress_f").addClass("is-invalid");
  } else {
    $("#addressReq_f").text("");
    $("#errAddress_f").text("");
    $("#txtAddress_f").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtCellphoneNumber_f").on("input", () => {
  const txtCellphoneNumber_f = $("#txtCellphoneNumber_f").val();
  if (txtCellphoneNumber_f.trim().length <= 0) {
    $("#cellphoneNumberReq_1_f").text("*");
    $("#errCellphoneNumber_1_f").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtCellphoneNumber_f").addClass("is-invalid");
  } else if (txtCellphoneNumber_f.trim().length <= 10) {
    if (txtCellphoneNumber_f === "N/A" || txtCellphoneNumber_f === "n/a") {
      $("#txtCellphoneNumber_f").removeClass("is-invalid").addClass("is-valid");
      $("#errCellphoneNumber_1_f").text("");
      $("#cellphoneNumberReq_1_f").text("");
    } else {
      $("#cellphoneNumberReq_1_f").text("*");
      $("#errCellphoneNumber_1_f").text("At least 11 characters required.");
      $("#txtCellphoneNumber_f").addClass("is-invalid");
    }
  } else if (isNaN(txtCellphoneNumber_f)) {
    $("#cellphoneNumberReq_1_f").text("*");
    $("#errCellphoneNumber_1_f").text("Please enter a valid positive number.");
    $("#txtCellphoneNumber_f").addClass("is-invalid");
  } else {
    $("#cellphoneNumberReq_1_f").text("");
    $("#errCellphoneNumber_1_f").text("");
    $("#txtCellphoneNumber_f").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtNationality_f").on("input", () => {
  const txtNationality_f = $("#txtNationality_f").val();
  if (txtNationality_f.trim().length <= 0) {
    $("#nationalityReq_f").text("*");
    $("#errNationality_f").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtNationality_f").addClass("is-invalid");
  } else if (txtNationality_f.trim().length <= 2) {
    $("#nationalityReq_f").text("*");
    $("#errNationality_f").text("At least 3 characters required.");
    $("#txtNationality_f").addClass("is-invalid");
  } else {
    $("#nationalityReq_f").text("");
    $("#errNationality_f").text("");
    $("#txtNationality_f").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtEducationalEttainment_f").on("input", () => {
  const txtEducationalEttainment_f = $("#txtEducationalEttainment_f").val();
  if (txtEducationalEttainment_f.trim().length <= 0) {
    $("#educationalettainmentReq_f").text("*");
    $("#errEducationalEttainment_f").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtEducationalEttainment_f").addClass("is-invalid");
  } else if (txtEducationalEttainment_f.trim().length <= 2) {
    $("#educationalettainmentReq_f").text("*");
    $("#errEducationalEttainment_f").text("At least 3 characters required.");
    $("#txtEducationalEttainment_f").addClass("is-invalid");
  } else {
    $("#educationalettainmentReq_f").text("");
    $("#errEducationalEttainment_f").text("");
    $("#txtEducationalEttainment_f")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
$("#txtOccupationPosition_f").on("input", () => {
  const txtOccupationPosition_f = $("#txtOccupationPosition_f").val();
  if (txtOccupationPosition_f.trim().length <= 0) {
    $("#occupationPositionReq_1_f").text("*");
    $("#errOccupationPosition_1_f").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtOccupationPosition_f").addClass("is-invalid");
  } else if (txtOccupationPosition_f.trim().length <= 2) {
    $("#occupationPositionReq_1_f").text("*");
    $("#errOccupationPosition_1_f").text("At least 3 characters required.");
    $("#txtOccupationPosition_f").addClass("is-invalid");
  } else {
    $("#occupationPositionReq_1_f").text("");
    $("#errOccupationPosition_1_f").text("");
    $("#txtOccupationPosition_f")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
$("#txtBusinessOfficeAddress_f").on("input", () => {
  const txtBusinessOfficeAddress_f = $("#txtBusinessOfficeAddress_f").val();
  if (txtBusinessOfficeAddress_f.trim().length <= 0) {
    $("#businessOfficeAddressReq_f").text("*");
    $("#errBusinessOfficeAddress_f").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtBusinessOfficeAddress_f").addClass("is-invalid");
  } else if (txtBusinessOfficeAddress_f.trim().length <= 2) {
    $("#businessOfficeAddressReq_f").text("*");
    $("#errBusinessOfficeAddress_f").text("At least 3 characters required.");
    $("#txtBusinessOfficeAddress_f").addClass("is-invalid");
  } else {
    $("#businessOfficeAddressReq_f").text("");
    $("#errBusinessOfficeAddress_f").text("");
    $("#txtBusinessOfficeAddress_f")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
$("#txtCellphoneNumber_2_f").on("input", () => {
  const txtCellphoneNumber_2_f = $("#txtCellphoneNumber_2_f").val();
  if (txtCellphoneNumber_2_f.trim().length <= 0) {
    $("#cellphoneNumberReq_2_f").text("*");
    $("#errCellphoneNumber_2_f").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtCellphoneNumber_2_f").addClass("is-invalid");
  } else if (txtCellphoneNumber_2_f.trim().length <= 10) {
    if (txtCellphoneNumber_2_f === "N/A" || txtCellphoneNumber_2_f === "n/a") {
      $("#txtCellphoneNumber_2_f")
        .removeClass("is-invalid")
        .addClass("is-valid");
      $("#errCellphoneNumber_2_f").text("");
      $("#cellphoneNumberReq_2_f").text("");
    } else {
      $("#cellphoneNumberReq_2_f").text("*");
      $("#errCellphoneNumber_2_f").text("At least 11 characters required.");
      $("#txtCellphoneNumber_2_f").addClass("is-invalid");
    }
  } else if (isNaN(txtCellphoneNumber_2_f)) {
    $("#cellphoneNumberReq_2_f").text("*");
    $("#errCellphoneNumber_2_f").text("Please enter a valid positive number.");
    $("#txtCellphoneNumber_2_f").addClass("is-invalid");
  } else {
    $("#cellphoneNumberReq_2_f").text("");
    $("#errCellphoneNumber_2_f").text("");
    $("#txtCellphoneNumber_2_f").removeClass("is-invalid").addClass("is-valid");
  }
});
const yesFather = document.getElementById("yes_f");
const noFather = document.getElementById("no_f");
const inputDisabledFather = document.querySelectorAll(".input-disabled-father");
yesFather.addEventListener("click", () => {
  inputDisabledFather.forEach(function (inpDisabled) {
    inpDisabled.removeAttribute("readonly");
    inpDisabled.value = "";
    inpDisabled.removeAttribute("style");
    $("#whereReq_f").text("*");
    $("#errWhere_f").text("No blank spaces allowed.");
    $("#txtWhere_f").addClass("is-invalid");

    $("#natureOfWorkReq_f").text("*");
    $("#errNatureOfWork_f").text("No blank spaces allowed.");
    $("#txtNatureOfWork_f").addClass("is-invalid");

    $("#occupationPositionReq_2_f").text("*");
    $("#errOccupationPosition_2_f").text("No blank spaces allowed.");
    $("#txtOccupationPosition_2_f").addClass("is-invalid");
  });
});
noFather.addEventListener("click", () => {
  inputDisabledFather.forEach(function (inpDisabled) {
    inpDisabled.setAttribute("readonly", true);
    inpDisabled.value = "N/A";
    inpDisabled.classList.add("bg-white");
    inpDisabled.style = "cursor: pointer";
    $("#whereReq_f").text("");
    $("#errWhere_f").text("");
    $("#txtWhere_f").removeClass("is-invalid").addClass("is-valid");

    $("#natureOfWorkReq_f").text("");
    $("#errNatureOfWork_f").text("");
    $("#txtNatureOfWork_f").removeClass("is-invalid").addClass("is-valid");

    $("#occupationPositionReq_2_f").text("");
    $("#errOccupationPosition_2_f").text("");
    $("#txtOccupationPosition_2_f")
      .removeClass("is-invalid")
      .addClass("is-valid");
  });
});
$("#txtWhere_f").on("input", () => {
  const txtWhere_f = $("#txtWhere_f").val();
  if (txtWhere_f.trim().length <= 0) {
    $("#whereReq_f").text("*");
    $("#errWhere_f").text("No blank spaces allowed.");
    $("#txtWhere_f").addClass("is-invalid");
  } else if (txtWhere_f.trim().length <= 2) {
    $("#whereReq_f").text("*");
    $("#errWhere_f").text("At least 3 characters required.");
    $("#txtWhere_f").addClass("is-invalid");
  } else {
    $("#whereReq_f").text("");
    $("#errWhere_f").text("");
    $("#txtWhere_f").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtNatureOfWork_f").on("input", () => {
  const txtNatureOfWork_f = $("#txtNatureOfWork_f").val();
  if (txtNatureOfWork_f.trim().length <= 0) {
    $("#natureOfWorkReq_f").text("*");
    $("#errNatureOfWork_f").text("No blank spaces allowed.");
    $("#txtNatureOfWork_f").addClass("is-invalid");
  } else if (txtNatureOfWork_f.trim().length <= 2) {
    $("#natureOfWorkReq_f").text("*");
    $("#errNatureOfWork_f").text("At least 3 characters required.");
    $("#txtNatureOfWork_f").addClass("is-invalid");
  } else {
    $("#natureOfWorkReq_f").text("");
    $("#errNatureOfWork_f").text("");
    $("#txtNatureOfWork_f").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtOccupationPosition_2_f").on("input", () => {
  const txtOccupationPosition_2_f = $("#txtOccupationPosition_2_f").val();
  if (txtOccupationPosition_2_f.trim().length <= 0) {
    $("#occupationPositionReq_2_f").text("*");
    $("#errOccupationPosition_2_f").text("No blank spaces allowed.");
    $("#txtOccupationPosition_2_f").addClass("is-invalid");
  } else if (txtOccupationPosition_2_f.trim().length <= 2) {
    $("#occupationPositionReq_2_f").text("*");
    $("#errOccupationPosition_2_f").text("At least 3 characters required.");
    $("#txtOccupationPosition_2_f").addClass("is-invalid");
  } else {
    $("#occupationPositionReq_2_f").text("");
    $("#errOccupationPosition_2_f").text("");
    $("#txtOccupationPosition_2_f")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
// Mother
$("#txtMother_m").on("input", () => {
  const txtMother_m = $("#txtMother_m").val();
  if (txtMother_m.trim().length <= 0) {
    $("#motherNameReq_m").text("*");
    $("#errMotherName_m").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtMother_m").addClass("is-invalid");
  } else if (txtMother_m.trim().length <= 2) {
    $("#motherNameReq_m").text("*");
    $("#errMotherName_m").text("At least 3 characters required.");
    $("#txtMother_m").addClass("is-invalid");
  } else {
    $("#motherNameReq_m").text("");
    $("#errMotherName_m").text("");
    $("#txtMother_m").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtAddress_m").on("input", () => {
  const txtAddress_m = $("#txtAddress_m").val();
  if (txtAddress_m.trim().length <= 0) {
    $("#addressReq_m").text("*");
    $("#errAddress_m").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtAddress_m").addClass("is-invalid");
  } else if (txtAddress_m.trim().length <= 2) {
    $("#addressReq_m").text("*");
    $("#errAddress_m").text("At least 3 characters required.");
    $("#txtAddress_m").addClass("is-invalid");
  } else {
    $("#addressReq_m").text("");
    $("#errAddress_m").text("");
    $("#txtAddress_m").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtCellphoneNumber_m").on("input", () => {
  const txtCellphoneNumber_m = $("#txtCellphoneNumber_m").val();
  if (txtCellphoneNumber_m.trim().length <= 0) {
    $("#cellphoneNumberReq_1_m").text("*");
    $("#errCellphoneNumber_1_m").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtCellphoneNumber_m").addClass("is-invalid");
  } else if (txtCellphoneNumber_m.trim().length <= 10) {
    if (txtCellphoneNumber_m === "N/A" || txtCellphoneNumber_m === "n/a") {
      $("#txtCellphoneNumber_m").removeClass("is-invalid").addClass("is-valid");
      $("#errCellphoneNumber_1_m").text("");
      $("#cellphoneNumberReq_1_m").text("");
    } else {
      $("#cellphoneNumberReq_1_m").text("*");
      $("#errCellphoneNumber_1_m").text("At least 11 characters required.");
      $("#txtCellphoneNumber_m").addClass("is-invalid");
    }
  } else if (isNaN(txtCellphoneNumber_m)) {
    $("#cellphoneNumberReq_1_m").text("*");
    $("#errCellphoneNumber_1_m").text("Please enter a valid positive number.");
    $("#txtCellphoneNumber_m").addClass("is-invalid");
  } else {
    $("#cellphoneNumberReq_1_m").text("");
    $("#errCellphoneNumber_1_m").text("");
    $("#txtCellphoneNumber_m").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtNationality_m").on("input", () => {
  const txtNationality_m = $("#txtNationality_m").val();
  if (txtNationality_m.trim().length <= 0) {
    $("#nationalityReq_m").text("*");
    $("#errNationality_m").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtNationality_m").addClass("is-invalid");
  } else if (txtNationality_m.trim().length <= 2) {
    $("#nationalityReq_m").text("*");
    $("#errNationality_m").text("At least 3 characters required.");
    $("#txtNationality_m").addClass("is-invalid");
  } else {
    $("#nationalityReq_m").text("");
    $("#errNationality_m").text("");
    $("#txtNationality_m").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtEducationalEttainment_m").on("input", () => {
  const txtEducationalEttainment_m = $("#txtEducationalEttainment_m").val();
  if (txtEducationalEttainment_m.trim().length <= 0) {
    $("#educationalettainmentReq_m").text("*");
    $("#errEducationalEttainment_m").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtEducationalEttainment_m").addClass("is-invalid");
  } else if (txtEducationalEttainment_m.trim().length <= 2) {
    $("#educationalettainmentReq_m").text("*");
    $("#errEducationalEttainment_m").text("At least 3 characters required.");
    $("#txtEducationalEttainment_m").addClass("is-invalid");
  } else {
    $("#educationalettainmentReq_m").text("");
    $("#errEducationalEttainment_m").text("");
    $("#txtEducationalEttainment_m")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
$("#txtOccupationPosition_m").on("input", () => {
  const txtOccupationPosition_m = $("#txtOccupationPosition_m").val();
  if (txtOccupationPosition_m.trim().length <= 0) {
    $("#occupationPositionReq_1_m").text("*");
    $("#errOccupationPosition_1_m").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtOccupationPosition_m").addClass("is-invalid");
  } else if (txtOccupationPosition_m.trim().length <= 2) {
    $("#occupationPositionReq_1_m").text("*");
    $("#errOccupationPosition_1_m").text("At least 3 characters required.");
    $("#txtOccupationPosition_m").addClass("is-invalid");
  } else {
    $("#occupationPositionReq_1_m").text("");
    $("#errOccupationPosition_1_m").text("");
    $("#txtOccupationPosition_m")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
$("#txtBusinessOfficeAddress_m").on("input", () => {
  const txtBusinessOfficeAddress_m = $("#txtBusinessOfficeAddress_m").val();
  if (txtBusinessOfficeAddress_m.trim().length <= 0) {
    $("#businessOfficeAddressReq_m").text("*");
    $("#errBusinessOfficeAddress_m").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtBusinessOfficeAddress_m").addClass("is-invalid");
  } else if (txtBusinessOfficeAddress_m.trim().length <= 2) {
    $("#businessOfficeAddressReq_m").text("*");
    $("#errBusinessOfficeAddress_m").text("At least 3 characters required.");
    $("#txtBusinessOfficeAddress_m").addClass("is-invalid");
  } else {
    $("#businessOfficeAddressReq_m").text("");
    $("#errBusinessOfficeAddress_m").text("");
    $("#txtBusinessOfficeAddress_m")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
$("#txtCellphoneNumber_2_m").on("input", () => {
  const txtCellphoneNumber_2_m = $("#txtCellphoneNumber_2_m").val();
  if (txtCellphoneNumber_2_m.trim().length <= 0) {
    $("#cellphoneNumberReq_2_m").text("*");
    $("#errCellphoneNumber_2_m").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtCellphoneNumber_2_m").addClass("is-invalid");
  } else if (txtCellphoneNumber_2_m.trim().length <= 10) {
    if (txtCellphoneNumber_2_m === "N/A" || txtCellphoneNumber_2_m === "n/a") {
      $("#txtCellphoneNumber_2_m")
        .removeClass("is-invalid")
        .addClass("is-valid");
      $("#errCellphoneNumber_2_m").text("");
      $("#cellphoneNumberReq_2_m").text("");
    } else {
      $("#cellphoneNumberReq_2_m").text("*");
      $("#errCellphoneNumber_2_m").text("At least 11 characters required.");
      $("#txtCellphoneNumber_2_m").addClass("is-invalid");
    }
  } else if (isNaN(txtCellphoneNumber_2_m)) {
    $("#cellphoneNumberReq_2_m").text("*");
    $("#errCellphoneNumber_2_m").text("Please enter a valid positive number.");
    $("#txtCellphoneNumber_2_m").addClass("is-invalid");
  } else {
    $("#cellphoneNumberReq_2_m").text("");
    $("#errCellphoneNumber_2_m").text("");
    $("#txtCellphoneNumber_2_m").removeClass("is-invalid").addClass("is-valid");
  }
});
const yesMother = document.getElementById("yes_m");
const nomother = document.getElementById("no_m");
const inputDisabledMother = document.querySelectorAll(".input-disabled-mother");
yesMother.addEventListener("click", () => {
  inputDisabledMother.forEach(function (inpDisabled) {
    inpDisabled.removeAttribute("readonly");
    inpDisabled.value = "";
    inpDisabled.removeAttribute("style");
    $("#whereReq_m").text("*");
    $("#errWhere_m").text("No blank spaces allowed.");
    $("#txtWhere_m").addClass("is-invalid");

    $("#natureOfWorkReq_m").text("*");
    $("#errNatureOfWork_m").text("No blank spaces allowed.");
    $("#txtNatureOfWork_m").addClass("is-invalid");

    $("#occupationPositionReq_2_m").text("*");
    $("#errOccupationPosition_2_m").text("No blank spaces allowed.");
    $("#txtOccupationPosition_2_m").addClass("is-invalid");
  });
});
nomother.addEventListener("click", () => {
  inputDisabledMother.forEach(function (inpDisabled) {
    inpDisabled.setAttribute("readonly", true);
    inpDisabled.value = "N/A";
    inpDisabled.classList.add("bg-white");
    inpDisabled.style = "cursor: pointer";
    $("#whereReq_m").text("");
    $("#errWhere_m").text("");
    $("#txtWhere_m").removeClass("is-invalid").addClass("is-valid");

    $("#natureOfWorkReq_m").text("");
    $("#errNatureOfWork_m").text("");
    $("#txtNatureOfWork_m").removeClass("is-invalid").addClass("is-valid");

    $("#occupationPositionReq_2_m").text("");
    $("#errOccupationPosition_2_m").text("");
    $("#txtOccupationPosition_2_m")
      .removeClass("is-invalid")
      .addClass("is-valid");
  });
});
$("#txtWhere_m").on("input", () => {
  const txtWhere_m = $("#txtWhere_m").val();
  if (txtWhere_m.trim().length <= 0) {
    $("#whereReq_m").text("*");
    $("#errWhere_m").text("No blank spaces allowed.");
    $("#txtWhere_m").addClass("is-invalid");
  } else if (txtWhere_m.trim().length <= 2) {
    $("#whereReq_m").text("*");
    $("#errWhere_m").text("At least 3 characters required.");
    $("#txtWhere_m").addClass("is-invalid");
  } else {
    $("#whereReq_m").text("");
    $("#errWhere_m").text("");
    $("#txtWhere_m").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtNatureOfWork_m").on("input", () => {
  const txtNatureOfWork_m = $("#txtNatureOfWork_m").val();
  if (txtNatureOfWork_m.trim().length <= 0) {
    $("#natureOfWorkReq_m").text("*");
    $("#errNatureOfWork_m").text("No blank spaces allowed.");
    $("#txtNatureOfWork_m").addClass("is-invalid");
  } else if (txtNatureOfWork_m.trim().length <= 2) {
    $("#natureOfWorkReq_m").text("*");
    $("#errNatureOfWork_m").text("At least 3 characters required.");
    $("#txtNatureOfWork_m").addClass("is-invalid");
  } else {
    $("#natureOfWorkReq_m").text("");
    $("#errNatureOfWork_m").text("");
    $("#txtNatureOfWork_m").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtOccupationPosition_2_m").on("input", () => {
  const txtOccupationPosition_2_m = $("#txtOccupationPosition_2_m").val();
  if (txtOccupationPosition_2_m.trim().length <= 0) {
    $("#occupationPositionReq_2_m").text("*");
    $("#errOccupationPosition_2_m").text("No blank spaces allowed.");
    $("#txtOccupationPosition_2_m").addClass("is-invalid");
  } else if (txtOccupationPosition_2_m.trim().length <= 2) {
    $("#occupationPositionReq_2_m").text("*");
    $("#errOccupationPosition_2_m").text("At least 3 characters required.");
    $("#txtOccupationPosition_2_m").addClass("is-invalid");
  } else {
    $("#occupationPositionReq_2_m").text("");
    $("#errOccupationPosition_2_m").text("");
    $("#txtOccupationPosition_2_m")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
$("#txtNumbersofchildern").on("input", () => {
  const txtNumbersofchildern = $("#txtNumbersofchildern").val();
  if (txtNumbersofchildern.trim().length <= 0) {
    $("#numbersOfChildernReq").text("*");
    $("#errNumbersofchildern").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtNumbersofchildern").addClass("is-invalid");
  } else if (txtNumbersofchildern.trim().length <= 2) {
    $("#numbersOfChildernReq").text("*");
    $("#errNumbersofchildern").text("At least 3 characters required.");
    $("#txtNumbersofchildern").addClass("is-invalid");
  } else {
    $("#numbersOfChildernReq").text("");
    $("#errNumbersofchildern").text("");
    $("#txtNumbersofchildern").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtStudentsBirthUrder").on("input", () => {
  const txtStudentsBirthUrder = $("#txtStudentsBirthUrder").val();
  if (txtStudentsBirthUrder.trim().length <= 0) {
    $("#studBirthOrderReq").text("*");
    $("#errStudBirthOrder").text(
      "No blank spaces allowed. (Type N/A if not applicable.)"
    );
    $("#txtStudentsBirthUrder").addClass("is-invalid");
  } else if (txtStudentsBirthUrder.trim().length <= 2) {
    $("#studBirthOrderReq").text("*");
    $("#errStudBirthOrder").text("At least 3 characters required.");
    $("#txtStudentsBirthUrder").addClass("is-invalid");
  } else {
    $("#studBirthOrderReq").text("");
    $("#errStudBirthOrder").text("");
    $("#txtStudentsBirthUrder").removeClass("is-invalid").addClass("is-valid");
  }
});
const yes_living = document.getElementById("yes_living");
const no_living = document.getElementById("no_living");
const inputDisabledLiving = document.querySelectorAll(".input-disabled-living");
yes_living.addEventListener("click", () => {
  inputDisabledLiving.forEach(function (inpDisabled) {
    inpDisabled.removeAttribute("readonly");
    inpDisabled.value = "";
    inpDisabled.removeAttribute("style");
    $("#ifNoWhyReq").text("*");
    $("#errIfNoWhy").text("No blank spaces allowed.");
    $("#txtIfNoWhy").addClass("is-invalid");

    $("#withWhomReq").text("*");
    $("#errwithWhom").text("No blank spaces allowed.");
    $("#txtWithWhom").addClass("is-invalid");

    $("#languagesDialetsReq").text("*");
    $("#errLanguagesDialets").text("No blank spaces allowed.");
    $("#txtWhatLanguages").addClass("is-invalid");
  });
});
no_living.addEventListener("click", () => {
  inputDisabledLiving.forEach(function (inpDisabled) {
    inpDisabled.setAttribute("readonly", true);
    inpDisabled.value = "N/A";
    inpDisabled.classList.add("bg-white");
    inpDisabled.style = "cursor: pointer";
    $("#ifNoWhyReq").text("");
    $("#errIfNoWhy").text("");
    $("#txtIfNoWhy").removeClass("is-invalid").addClass("is-valid");

    $("#withWhomReq").text("");
    $("#errwithWhom").text("");
    $("#txtWithWhom").removeClass("is-invalid").addClass("is-valid");

    $("#languagesDialetsReq").text("");
    $("#errLanguagesDialets").text("");
    $("#txtWhatLanguages").removeClass("is-invalid").addClass("is-valid");
  });
});
$("#txtIfNoWhy").on("input", () => {
  const txtIfNoWhy = $("#txtIfNoWhy").val();
  if (txtIfNoWhy.trim().length <= 0) {
    $("#ifNoWhyReq").text("*");
    $("#errIfNoWhy").text("No blank spaces allowed.");
    $("#txtIfNoWhy").addClass("is-invalid");
  } else if (txtIfNoWhy.trim().length <= 2) {
    $("#ifNoWhyReq").text("*");
    $("#errIfNoWhy").text("At least 3 characters required.");
    $("#txtIfNoWhy").addClass("is-invalid");
  } else {
    $("#ifNoWhyReq").text("");
    $("#errIfNoWhy").text("");
    $("#txtIfNoWhy").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtWithWhom").on("input", () => {
  const txtWithWhom = $("#txtWithWhom").val();
  if (txtWithWhom.trim().length <= 0) {
    $("#withWhomReq").text("*");
    $("#errwithWhom").text("No blank spaces allowed.");
    $("#txtWithWhom").addClass("is-invalid");
  } else if (txtWithWhom.trim().length <= 2) {
    $("#withWhomReq").text("*");
    $("#errwithWhom").text("At least 3 characters required.");
    $("#txtWithWhom").addClass("is-invalid");
  } else {
    $("#withWhomReq").text("");
    $("#errwithWhom").text("");
    $("#txtWithWhom").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtWhatLanguages").on("input", () => {
  const txtWhatLanguages = $("#txtWhatLanguages").val();
  if (txtWhatLanguages.trim().length <= 0) {
    $("#languagesDialetsReq").text("*");
    $("#errLanguagesDialets").text("No blank spaces allowed.");
    $("#txtWhatLanguages").addClass("is-invalid");
  } else if (txtWhatLanguages.trim().length <= 2) {
    $("#languagesDialetsReq").text("*");
    $("#errLanguagesDialets").text("At least 3 characters required.");
    $("#txtWhatLanguages").addClass("is-invalid");
  } else {
    $("#languagesDialetsReq").text("");
    $("#errLanguagesDialets").text("");
    $("#txtWhatLanguages").removeClass("is-invalid").addClass("is-valid");
  }
});
// End for family data
// validation for educational data
$("#txtWhatYourHighSchoolAverage").on("input", () => {
  const txtWhatYourHighSchoolAverage = $("#txtWhatYourHighSchoolAverage").val();
  if (txtWhatYourHighSchoolAverage.trim().length <= 0) {
    $("#whatYourHighSchoolAverageReq").text("*");
    $("#errWhatYourHighSchoolAverage").text("No blank spaces allowed.");
    $("#txtWhatYourHighSchoolAverage").addClass("is-invalid");
  } else if (txtWhatYourHighSchoolAverage.trim().length <= 2) {
    $("#whatYourHighSchoolAverageReq").text("*");
    $("#errWhatYourHighSchoolAverage").text("At least 3 characters required.");
    $("#txtWhatYourHighSchoolAverage").addClass("is-invalid");
  } else {
    $("#whatYourHighSchoolAverageReq").text("");
    $("#errWhatYourHighSchoolAverage").text("");
    $("#txtWhatYourHighSchoolAverage")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
$("#txtHonorAwardsDidRecieve").on("input", () => {
  const txtHonorAwardsDidRecieve = $("#txtHonorAwardsDidRecieve").val();
  if (txtHonorAwardsDidRecieve.trim().length <= 0) {
    $("#honorAwardsDidRecieveReq").text("*");
    $("#errHonorAwardsDidRecieve").text("No blank spaces allowed.");
    $("#txtHonorAwardsDidRecieve").addClass("is-invalid");
  } else if (txtHonorAwardsDidRecieve.trim().length <= 2) {
    $("#honorAwardsDidRecieveReq").text("*");
    $("#errHonorAwardsDidRecieve").text("At least 3 characters required.");
    $("#txtHonorAwardsDidRecieve").addClass("is-invalid");
  } else {
    $("#honorAwardsDidRecieveReq").text("");
    $("#errHonorAwardsDidRecieve").text("");
    $("#txtHonorAwardsDidRecieve")
      .removeClass("is-invalid")
      .addClass("is-valid");
  }
});
$("#txtWhatLikeMost").on("input", () => {
  const txtWhatLikeMost = $("#txtWhatLikeMost").val();
  if (txtWhatLikeMost.trim().length <= 0) {
    $("#whatLikeMostReq").text("*");
    $("#errWhatLikeMost").text("No blank spaces allowed.");
    $("#txtWhatLikeMost").addClass("is-invalid");
  } else if (txtWhatLikeMost.trim().length <= 2) {
    $("#whatLikeMostReq").text("*");
    $("#errWhatLikeMost").text("At least 3 characters required.");
    $("#txtWhatLikeMost").addClass("is-invalid");
  } else {
    $("#whatLikeMostReq").text("");
    $("#errWhatLikeMost").text("");
    $("#txtWhatLikeMost").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtWhyMost").on("input", () => {
  const txtWhyMost = $("#txtWhyMost").val();
  if (txtWhyMost.trim().length <= 0) {
    $("#whyMostReq").text("*");
    $("#errWhyMost").text("No blank spaces allowed.");
    $("#txtWhyMost").addClass("is-invalid");
  } else if (txtWhyMost.trim().length <= 2) {
    $("#whyMostReq").text("*");
    $("#errWhyMost").text("At least 3 characters required.");
    $("#txtWhyMost").addClass("is-invalid");
  } else {
    $("#whyMostReq").text("");
    $("#errWhyMost").text("");
    $("#txtWhyMost").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtLikeLeast").on("input", () => {
  const txtLikeLeast = $("#txtLikeLeast").val();
  if (txtLikeLeast.trim().length <= 0) {
    $("#likeLeastReq").text("*");
    $("#errLikeLeast").text("No blank spaces allowed.");
    $("#txtLikeLeast").addClass("is-invalid");
  } else if (txtLikeLeast.trim().length <= 2) {
    $("#likeLeastReq").text("*");
    $("#errLikeLeast").text("At least 3 characters required.");
    $("#txtLikeLeast").addClass("is-invalid");
  } else {
    $("#likeLeastReq").text("");
    $("#errLikeLeast").text("");
    $("#txtLikeLeast").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtWhyLeast").on("input", () => {
  const txtWhyLeast = $("#txtWhyLeast").val();
  if (txtWhyLeast.trim().length <= 0) {
    $("#whyLeastReq").text("*");
    $("#errWhyLeast").text("No blank spaces allowed.");
    $("#txtWhyLeast").addClass("is-invalid");
  } else if (txtWhyLeast.trim().length <= 2) {
    $("#whyLeastReq").text("*");
    $("#errWhyLeast").text("At least 3 characters required.");
    $("#txtWhyLeast").addClass("is-invalid");
  } else {
    $("#whyLeastReq").text("");
    $("#errWhyLeast").text("");
    $("#txtWhyLeast").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtFormWhatSchool").on("input", () => {
  const txtFormWhatSchool = $("#txtFormWhatSchool").val();
  if (txtFormWhatSchool.trim().length <= 0) {
    $("#formWhatSchoolReq").text("*");
    $("#errformWhatSchool").text("No blank spaces allowed.");
    $("#txtFormWhatSchool").addClass("is-invalid");
  } else if (txtFormWhatSchool.trim().length <= 2) {
    $("#formWhatSchoolReq").text("*");
    $("#errformWhatSchool").text("At least 3 characters required.");
    $("#txtFormWhatSchool").addClass("is-invalid");
  } else {
    $("#formWhatSchoolReq").text("");
    $("#errformWhatSchool").text("");
    $("#txtFormWhatSchool").removeClass("is-invalid").addClass("is-valid");
  }
});
$("#txtWhoSupportsStudies").on("input", () => {
  const txtWhoSupportsStudies = $("#txtWhoSupportsStudies").val();
  if (txtWhoSupportsStudies.trim().length <= 0) {
    $("#whoSupportsStudiesReq").text("*");
    $("#errWhoSupportsStudies").text("No blank spaces allowed.");
    $("#txtWhoSupportsStudies").addClass("is-invalid");
  } else if (txtWhoSupportsStudies.trim().length <= 2) {
    $("#whoSupportsStudiesReq").text("*");
    $("#errWhoSupportsStudies").text("At least 3 characters required.");
    $("#txtWhoSupportsStudies").addClass("is-invalid");
  } else {
    $("#whoSupportsStudiesReq").text("");
    $("#errWhoSupportsStudies").text("");
    $("#txtWhoSupportsStudies").removeClass("is-invalid").addClass("is-valid");
  }
});
const YesTransferee = document.getElementById("YesTransferee");
const NoTransferee = document.getElementById("NoTransferee");
const inputDisabledfromWhatSchool = document.querySelector(".from-what-school");
YesTransferee.addEventListener("click", () => {
  inputDisabledfromWhatSchool.removeAttribute("readonly");
  inputDisabledfromWhatSchool.value = "";
  inputDisabledfromWhatSchool.style.cursor = ""; // Removed style override
  $("#formWhatSchoolReq").text("*");
  $("#errformWhatSchool").text("No blank spaces allowed.");
  $("#txtFormWhatSchool").addClass("is-invalid");
});
NoTransferee.addEventListener("click", () => {
  inputDisabledfromWhatSchool.setAttribute("readonly", true);
  inputDisabledfromWhatSchool.value = "N/A";
  inputDisabledfromWhatSchool.style.cursor = "pointer";
  inputDisabledfromWhatSchool.classList.add("bg-white");
  $("#formWhatSchoolReq").text("");
  $("#errformWhatSchool").text("");
  $("#txtFormWhatSchool").removeClass("is-invalid").addClass("is-valid");
});
$("#txtIfyesScholarShip").on("input", () => {
  const txtIfyesScholarShip = $("#txtIfyesScholarShip").val();
  if (txtIfyesScholarShip.trim().length <= 0) {
    $("#ifYesscholarShipReq").text("*");
    $("#errIfYesscholarShip").text("No blank spaces allowed.");
    $("#txtIfyesScholarShip").addClass("is-invalid");
  } else if (txtIfyesScholarShip.trim().length <= 2) {
    $("#ifYesscholarShipReq").text("*");
    $("#errIfYesscholarShip").text("At least 3 characters required.");
    $("#txtIfyesScholarShip").addClass("is-invalid");
  } else {
    $("#ifYesscholarShipReq").text("");
    $("#errIfYesscholarShip").text("");
    $("#txtIfyesScholarShip").removeClass("is-invalid").addClass("is-valid");
  }
});
const YesEducational = document.getElementById("YesEducational");
const NoEducational = document.getElementById("NoEducational");
const educationalscholarshipprogram = document.querySelector(
  ".educational-scholarship-program"
);
YesEducational.addEventListener("click", () => {
  educationalscholarshipprogram.removeAttribute("disabled");
  educationalscholarshipprogram.value = "";
  educationalscholarshipprogram.style.cursor = "";
  $("#ifYesscholarShipReq").text("*");
  $("#errIfYesscholarShip").text("No blank spaces allowed.");
  $("#txtIfyesScholarShip").addClass("is-invalid");
});
NoEducational.addEventListener("click", () => {
  educationalscholarshipprogram.setAttribute("disabled", true);
  educationalscholarshipprogram.value = "N/A";
  educationalscholarshipprogram.style = "cursor: pointer";
  educationalscholarshipprogram.classList.add("bg-white");
  $("#ifYesscholarShipReq").text("");
  $("#errIfYesscholarShip").text("");
  $("#txtIfyesScholarShip").removeClass("is-invalid").addClass("is-valid");
});
$("#txtWhatCourseTakeThere").on("input", () => {
  const txtWhatCourseTakeThere = $("#txtWhatCourseTakeThere").val();
  if (txtWhatCourseTakeThere.trim().length <= 0) {
    $("#whatCourseTakeThereReq").text("*");
    $("#errWhatCourseTakeThere").text("No blank spaces allowed.");
    $("#txtWhatCourseTakeThere").addClass("is-invalid");
  } else if (txtWhatCourseTakeThere.trim().length <= 2) {
    $("#whatCourseTakeThereReq").text("*");
    $("#errWhatCourseTakeThere").text("Atleast 3 characters required.");
    $("#txtWhatCourseTakeThere").addClass("is-invalid");
  } else {
    $("#whatCourseTakeThereReq").text("");
    $("#errWhatCourseTakeThere").text("");
    $("#txtWhatCourseTakeThere").removeClass("is-invalid").addClass("is-valid");
  }
});
// End educational data
// Validation for health data
$("#txtOthersPleaseSpecify").on("input", () => {
  $("#txtOthersPleaseSpecify").addClass("is-valid");
});
// End education data
// Ip and PWD Checklist
const YesIndigenous = document.getElementById("YesIndigenous");
const NoIndigenous = document.getElementById("NoIndigenous");
const pwdDisabledIndigenous = document.querySelectorAll(
  ".pwd-disabled-indigenous"
);
YesIndigenous.addEventListener("click", () => {
  pwdDisabledIndigenous.forEach(function (Indegenous) {
    Indegenous.removeAttribute("disabled");
    $("#txtPwdChecklistPleaseSpecify").focusout();
    $("#pwdChecklistPleaseSpecifyReq").text("");
    $("#txtPwdChecklistPleaseSpecify").removeClass("is-invalid");
    $("#errPwdChecklistPleaseSpecify").text("");
  });
});
NoIndigenous.addEventListener("click", () => {
  pwdDisabledIndigenous.forEach(function (Indegenous) {
    Indegenous.setAttribute("disabled", true);
    $("#txtPwdChecklistPleaseSpecify").focus();
    $("#pwdChecklistPleaseSpecifyReq").text("*");
    $("#txtPwdChecklistPleaseSpecify").addClass("is-invalid");
    $("#errPwdChecklistPleaseSpecify").text("No blank spaces allowed.");
  });
});
$("#txtPwdChecklistPleaseSpecify").on("input", () => {
  if ($("#txtPwdChecklistPleaseSpecify").val().trim().length <= 0) {
    $("#pwdChecklistPleaseSpecifyReq").text("*");
    $("#txtPwdChecklistPleaseSpecify").addClass("is-invalid");
    $("#errPwdChecklistPleaseSpecify").text("No blank spaces allowed.");
  } else if ($("#txtPwdChecklistPleaseSpecify").val().trim().length <= 2) {
    $("#pwdChecklistPleaseSpecifyReq").text("*");
    $("#txtPwdChecklistPleaseSpecify").addClass("is-invalid");
    $("#errPwdChecklistPleaseSpecify").text(
      "atleast 3 characters allowed required."
    );
  } else {
    $("#pwdChecklistPleaseSpecifyReq").text("");
    $("#txtPwdChecklistPleaseSpecify")
      .removeClass("is-invalid")
      .addClass("is-valid");
    $("#errPwdChecklistPleaseSpecify").text("");
  }
});
const rDisabilitiesYes = document.getElementById("rDisabilitiesYes");
const rDisabilitiesNo = document.getElementById("rDisabilitiesNo");
const pwdChecklistDisabilities = document.querySelectorAll(
  ".pwd-checklist-disabilities"
);
rDisabilitiesYes.addEventListener("click", () => {
  pwdChecklistDisabilities.forEach(function (Indegenous) {
    Indegenous.removeAttribute("disabled");
    $("#txtIpPWDOthersPlease").focusout();
    $("#pwdChecklistOthersReq").text("");
    $("#txtIpPWDOthersPlease").removeClass("is-invalid");
    $("#errPwdChecklistOthers").text("");
  });
});
rDisabilitiesNo.addEventListener("click", () => {
  pwdChecklistDisabilities.forEach(function (Indegenous) {
    Indegenous.setAttribute("disabled", true);
    $("#txtIpPWDOthersPlease").focus();
    $("#pwdChecklistOthersReq").text("*");
    $("#txtIpPWDOthersPlease").addClass("is-invalid");
    $("#errPwdChecklistOthers").text("No blank spaces allowed.");
  });
});
$("#txtIpPWDOthersPlease").on("input", () => {
  if ($("#txtIpPWDOthersPlease").val().trim().length <= 0) {
    $("#pwdChecklistOthersReq").text("*");
    $("#txtIpPWDOthersPlease").addClass("is-invalid");
    $("#errPwdChecklistOthers").text("No blank spaces allowed.");
  } else if ($("#txtIpPWDOthersPlease").val().trim().length <= 2) {
    $("#pwdChecklistOthersReq").text("*");
    $("#txtIpPWDOthersPlease").addClass("is-invalid");
    $("#errPwdChecklistOthers").text("atleast 3 characters allowed required.");
  } else {
    $("#pwdChecklistOthersReq").text("");
    $("#txtIpPWDOthersPlease").removeClass("is-invalid").addClass("is-valid");
    $("#errPwdChecklistOthers").text("");
  }
});

$("#txtInterviewOthersOne").on("input", function () {
  const txtInterviewOthersOne = $(this).val();
  if (txtInterviewOthersOne.trim().length <= 0) {
    $("#InterviewOthersOneReq").text("*");
    $("#errInterviewOthersOne").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtInterviewOthersOne.trim().length <= 2) {
    $("#InterviewOthersOneReq").text("*");
    $("#errInterviewOthersOne").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#InterviewOthersOneReq").text("");
    $("#errInterviewOthersOne").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#txtInterviewOthersTwo").on("input", function () {
  const txtInterviewOthersTwo = $(this).val();
  if (txtInterviewOthersTwo.trim().length <= 0) {
    $("#interviewOthersTwoReq").text("*");
    $("#errInterviewOthersTwo").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtInterviewOthersTwo.trim().length <= 2) {
    $("#interviewOthersTwoReq").text("*");
    $("#errInterviewOthersTwo").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#interviewOthersTwoReq").text("");
    $("#errInterviewOthersTwo").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#txtMajorOne").on("input", function () {
  const txtMajorOne = $(this).val();
  if (txtMajorOne.trim().length <= 0) {
    $("#majorOneReq").text("*");
    $("#errMajorOne").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtMajorOne.trim().length <= 2) {
    $("#majorOneReq").text("*");
    $("#errMajorOne").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#majorOneReq").text("");
    $("#errMajorOne").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#txtSpecialization").on("input", function () {
  const txtSpecialization = $(this).val();
  if (txtSpecialization.trim().length <= 0) {
    $("#specializationReq").text("*");
    $("#errSpecialization").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtSpecialization.trim().length <= 2) {
    $("#specializationReq").text("*");
    $("#errSpecialization").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#specializationReq").text("");
    $("#errSpecialization").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#txtInterviewFour").on("input", function () {
  const txtInterviewFour = $(this).val();
  if (txtInterviewFour.trim().length <= 0) {
    $("#interviewFourReq").text("*");
    $("#errInterviewFour").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtInterviewFour.trim().length <= 2) {
    $("#interviewFourReq").text("*");
    $("#errInterviewFour").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#interviewFourReq").text("");
    $("#errInterviewFour").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#txtInterviewFive").on("input", function () {
  const txtInterviewFive = $(this).val();
  if (txtInterviewFive.trim().length <= 0) {
    $("#interviewFiveReq").text("*");
    $("#errInterviewFive").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtInterviewFive.trim().length <= 2) {
    $("#interviewFiveReq").text("*");
    $("#errInterviewFive").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#interviewFiveReq").text("");
    $("#errInterviewFive").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#txtInterviewOthersFive").on("input", function () {
  const txtInterviewOthersFive = $(this).val();
  if (txtInterviewOthersFive.trim().length <= 0) {
    $("#interviewOthersFiveReq").text("*");
    $("#errInterviewOthersFive").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtInterviewOthersFive.trim().length <= 2) {
    $("#interviewOthersFiveReq").text("*");
    $("#errInterviewOthersFive").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#interviewOthersFiveReq").text("");
    $("#errInterviewOthersFive").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#txtInterviewOthersSix").on("input", function () {
  const txtInterviewOthersSix = $(this).val();
  if (txtInterviewOthersSix.trim().length <= 0) {
    $("#interviewOthersSixReq").text("*");
    $("#errInterviewOthersSix").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtInterviewOthersSix.trim().length <= 2) {
    $("#interviewOthersSixReq").text("*");
    $("#errInterviewOthersSix").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#interviewOthersSixReq").text("");
    $("#errInterviewOthersSix").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#txtInterviewSeven").on("input", function () {
  const txtInterviewSeven = $(this).val();
  if (txtInterviewSeven.trim().length <= 0) {
    $("#interviewSevenReq").text("*");
    $("#errInterviewSeven").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtInterviewSeven.trim().length <= 2) {
    $("#interviewSevenReq").text("*");
    $("#errInterviewSeven").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#interviewSevenReq").text("");
    $("#errInterviewSeven").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#txtInterviewEight").on("input", function () {
  const txtInterviewEight = $(this).val();
  if (txtInterviewEight.trim().length <= 0) {
    $("#interviewEightReq").text("*");
    $("#errInterviewEight").text("No blank spaces allowed.");
    $(this).addClass("is-invalid");
  } else if (txtInterviewEight.trim().length <= 2) {
    $("#interviewEightReq").text("*");
    $("#errInterviewEight").text("At least 3 characters required.");
    $(this).addClass("is-invalid");
  } else {
    $("#interviewEightReq").text("");
    $("#errInterviewEight").text("");
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

let f_addrows =
  '<tr>\
    <td class="align-middle p-0 text-nowrap"><input type="text" name="txtBrotherSister[]" class="form-control rounded-0 shadow-none border-0"></td>\
    <td class="align-middle p-0 text-nowrap"><input type="text" name="txtBrotherSister[]" class="form-control rounded-0 shadow-none border-0"></td>\
    <td class="align-middle p-0 text-nowrap"><input type="text" name="txtBrotherSister[]" class="form-control rounded-0 shadow-none border-0"></td>\
    <td class="align-middle p-0 text-nowrap"><input type="text" name="txtBrotherSister[]" class="form-control rounded-0 shadow-none border-0"></td>\
    <td class="align-middle p-0 text-nowrap"><input type="text" name="txtBrotherSister[]" class="form-control rounded-0 shadow-none border-0"></td>\
    <td class="align-middle p-0">\
      <div class="btn-group d-sm-flex justify-content-center align-items-center">\
          <div>\
            <button type="button" class="btn" id="deletebros"><i class="fa text-danger">&#xf00d;</i></button>\
          </div>\
      </div>\
    </td>\
  </tr>';
var f_max = 9;
var f_x = 0;
$("#add_family_data_btn").click(function (e) {
  e.preventDefault();
  $("#table-d-none").addClass("d-none");
  if (f_x <= f_max) {
    $("#table_field").append(f_addrows);
    f_x++;
  }
});
$("#table_field").on("click", "#deletebros", function () {
  $(this).closest("tr").remove();
  x--;
});

let e_addrows =
  '<tr>\
      <td class="align-middle p-0 text-nowrap"><input type="text" name="txtFraternity[]" class="form-control rounded-0 shadow-none border-0"></td>\
      <td class="align-middle p-0 text-nowrap"><input type="text" name="txtFraternity[]" class="form-control rounded-0 shadow-none border-0"></td>\
      <td class="align-middle p-0">\
          <div class="btn-group d-sm-flex justify-content-center align-items-center">\
            <div>\
                <button class="btn" id="remove_tr_educational_data"><i class="fa text-danger">&#xf00d;</i></button>\
            </div>\
          </div>\
      </td>\
</tr>';
var e_max = 9;
var e_x = 0;
$("#btn_educational_data").click(function (e) {
  e.preventDefault();
  $("#table-educ-d-none").addClass("d-none");
  if (e_x <= e_max) {
    $("#table_educational_data").append(e_addrows);
    e_x++;
  }
});
$("#table_educational_data").on(
  "click",
  "#remove_tr_educational_data",
  function () {
    $(this).closest("tr").remove();
    x--;
  }
);
