const double = (x) => {
  const y = x;
  return y * 2;
};

const subtractOne = (x) => {
  const y = x;
  return y - 1;
};

const addThree = (x) => {
  const y = x;
  return y + 3;
};

const operationsMap = new Map([
  [Symbol('mathOps'), double],
  [Symbol('mathOps'), subtractOne],
  [Symbol('mathOps'), addThree],
]);

let result = 0;

operationsMap.forEach((value, key, map) => {
  if (key.description.includes('math')) {
    result = value(0);
  }
});

console.log(result);
