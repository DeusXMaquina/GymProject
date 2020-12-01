function setCookieValue(event, value) {
  var cookieNames = {
    1: "invoice",
    2: "name",
    3: "date",
    4: "total",
  };
  document.cookie = cookieNames[event.cellIndex] + "=" + value;
}

(function removeCookies() {
  var cookieNames = [
    "course",
    "instructor",
    "description",
    "id",
    "originalInstructor",
  ];
  cookieNames.forEach(
    (cookie) => (document.cookie = cookie + "=;" + "expires = 1/1/2020;")
  );
})();

document.querySelectorAll("#invoiceTable td").forEach((event) =>
  event.addEventListener("dblclick", function () {
    if (event.innerText !== "UpdateRemove") {
      var value = window.prompt("Enter new value: ", event.innerText);
      if (value !== "") {
        if (event.id === "instructor") {
          document.cookie = "originalInstructor=" + event.innerText;
        }
        event.innerText = value;
        setCookieValue(event, value);
      }
    }
  })
);

document.querySelectorAll("#invoiceTable button").forEach((event) =>
  event.addEventListener("click", function () {
    document.cookie = "id=" + event.id;
  })
);
