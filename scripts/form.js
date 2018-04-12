$("#current_option").click(function() {
  customOptionsBlock = $("#custom_options");
  if (customOptionsBlock.is(":hidden")) {
    $("#custom_options").show();
  } else {
    $("#custom_options").hide();
  }
});

$("#custom_options li").click(function() {
  choosenValue = $(this).attr("data-value");
  $("select").val(choosenValue).prop("selected", true);
  $("#current_option span").text($(this).text());
  $("#current_option").attr("data-value", choosenValue);
});

$('select').change(function() {
  $('#current_option').attr("data-value", $(this).val());
  $("#current_option span").text($('select :selected').text());
});