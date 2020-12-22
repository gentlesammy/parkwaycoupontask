const dataio = {
  username: "user3",
  email: "user3@gmail.com",
  password: "kometh123",
};

fetch("http://linksum.herokuapp.com/api/v1/signup", {
  method: "POST",
  body: JSON.stringify(dataio),
  headers: { "Content-type": "application/json; charset=UTF-8" },
})
  .then((response) => response.json())
  .then((json) => {
    console.log(json);
  });
