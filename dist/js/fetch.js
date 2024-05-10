const url = './api/people.json';

// const response= fetch(url);

fetch(url).then((resp) => {
  return resp.json()
}).then((data) => {
  console.log(data);
}).catch((err) => {
  console.log(err);
})