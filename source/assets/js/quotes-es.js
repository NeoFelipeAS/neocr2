$("#target").click(function() {
  $.getJSON("/assets/js/frases.json", function(data) {
    var quote = data[Math.floor(Math.random() * data.length)];
    $("#quote").text(quote["quote"]);
    $("#cite").text(quote["author"]);
  });
});
