async function sendPrices() {
    const inputs = document.querySelectorAll("input[type='number']");
    const prices = Array.from(inputs).map(i => i.value || 0);

    const response = await fetch("../backend/calculate_total.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ prices })
    });

    const data = await response.json();
    document.getElementById("total").textContent = data.total;
}

document.querySelectorAll("input[type='number']").forEach(input => {
    input.addEventListener("input", sendPrices);
});
