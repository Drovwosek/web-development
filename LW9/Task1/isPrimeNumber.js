function isPrimeNumber(i) {
    if (typeof i === 'number') {
        let multiple = 1;// считаем кратности
        if (i === 1) { // исключение единицы
            multiple = 0;
        } else {
            for (n = 2; n < i; n++) { //оптимизация
                if (i % n === 0) {
                    multiple++;
                }
            }
        }
        if (multiple === 1) {
            console.log(`${i} is prime number`);
        } else {
            console.log(`${i} is not prime number`);
        }
    } else {
        if (typeof i === 'object') { //проверка на массива с array.isArray в объект можно засунуть object
            for (let j in i) {
                isPrimeNumber(i[j])
            }
        } else {
            console.log(`${i}: incorrect data entered`);
        }
    }
}
