function calculate(form) {
    if (!isNaN(form.data1.value) && !isNaN(form.data2.value) && form.data1.value > 0 && form.data2.value > 0) {
        document.getElementById('result1').innerHTML = "最大公因數 : " + gcd(parseInt(form.data1.value), parseInt(form.data2.value))
        document.getElementById('result2').innerHTML = "最小公倍數 : " + lcm(parseInt(form.data1.value), parseInt(form.data2.value))
    }
    else {
        document.getElementById('result1').innerHTML = "請輸入正整數"
        document.getElementById('result2').innerHTML = "備註：正整數為大於 0 的整數"
    }
}

function gcd(m, n) {
    return (n == 0 ? m : gcd(n, m % n));
}

function lcm(mm, nn) {
    return mm * nn / gcd(mm, nn);
}