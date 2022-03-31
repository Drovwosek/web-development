function validateParentheses(expression) {
  const parentheses = expression.replace(/[^()]/g, '');
  const stack = [];
  for (let i = 0; i < parentheses.length; i++) {
    if (parentheses[i] === '(') {
      stack.push('(');//добавил элемент в массив
    } else {
      if (stack.length > 0) {
        stack.pop(); //вытолкнул bиз массива последний элемент
         } else {
        return false;
      }
    }
  }

  if (stack.length > 0) {
    return false;
  } else {
    return true;
  }
}

function validateSymbols(expression) {
  const invalidSymbols = expression.replace(/[0-9, (, ), +, -, /, *, ' ']/g, '');
  console.log(invalidSymbols);
  return invalidSymbols === '';
}

function calculateOperation(operator, operand1, operand2) {
  if (operator === '+') return operand1 + operand2;
  if (operator === '-') return operand1 - operand2;
  if (operator === '*') return operand1 * operand2;
  if (operator === '/') return operand1 / operand2;
}

function calc(str) {
  if (!validateParentheses(str)) {
    return 'invalid expression, parentheses does not match';
  }
  str = str.replace(/[(, )]/g, ' '); // замена как в лабе по пыхе
  str = str.replace(/ +/g, ' ').trim();
  const operators = ['+', '-', '*', '/'];
  const arr = str.split(' '); //разделяю строку, граница - ' ', массив символов

  for (let i = 0; i < arr.length; i++) {
    if (!isNaN(arr[i])) {
      arr[i] = parseFloat(arr[i]); //давлю число из элемента. Прим.(314qwa => 314)
    }
  }

  let i = 0;
  while (i < arr.length - 2) {
    if (operators.indexOf(arr[i]) !== -1 && !isNaN(arr[i+1]) && !isNaN(arr[i+2])) {  // коли элементы в массиве есть
      arr.splice(i, 3, calculateOperation(arr[i], arr[i + 1], arr[i + 2])); //с i убиваю и добавляю 3 элемента,
      i = 0;
      continue;
    }
    i++;
  }

  if (arr.length > 1 || isNaN(arr[0])) {
    return 'Wrong input';
  }
  else {
    return arr[0];
  }
}