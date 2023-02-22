paypal.Buttons({
    style: {
        color: 'black',
        label: 'paypal',
    },
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: String(document.getElementById("amount").value >= 1 ? document.getElementById("amount").value : 1)
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            gift = document.getElementById("wrapGift");
            nameGift = document.getElementById("name").value;
            form = `<form id="successForm" method="post" action="../../backend/payments/paypal_create_success_payment.php" class="hidden">
            <input type="text" name="author" id="author">
            <input type="text" name="nameGift" id="nameGift" value="${nameGift}">
            <input type="number" name="amountPaypal" id="amountPaypal">
            </form>`;

            gift.insertAdjacentHTML("beforeend", form);
            document.getElementById("author").value = details.payer.name.given_name;
            document.getElementById("amountPaypal").value = details.purchase_units[0].amount.value;
            document.getElementById("successForm").submit();
        });
    },
    onError: function (err) {
        gift = document.getElementById("wrapGift");
        nameGift = document.getElementById("name").value;
        form = `<form id="failureForm" method="post" action="../../backend/payments/paypal_create_fail_payment.php" class="hidden">
        <input type="text" name="author" id="author">
        <input type="text" name="nameGift" id="nameGift" value="${nameGift}">
        <input type="number" name="amountPaypal" id="amountPaypal">
        </form>`;

        gift.insertAdjacentHTML("beforeend", form);
        document.getElementById("author").value = details.payer.name.given_name;
        document.getElementById("amountPaypal").value = details.purchase_units[0].amount.value;
        document.getElementById("failureForm").submit();
    }
}).render('#paypal-button-container');