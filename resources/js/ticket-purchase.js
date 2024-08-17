document.getElementById('quantity').addEventListener('change', function() {
    var quantity = this.value;
    var priceElement = document.getElementById('eventPrice');
    var price = parseFloat(priceElement.textContent.replace('$', '').replace(/,/g, ''));
    var total = quantity * price;
    var formattedTotal = total.toLocaleString('en-US');
    document.getElementById('total').textContent = '$' + formattedTotal;
});
