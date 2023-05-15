document.addEventListener('DOMContentLoaded', fetchCoinData);

function fetchCoinData() {
  fetch('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd')
    .then(response => response.json())
    .then(data => {
      const coinTableBody = document.getElementById('coinTableBody');

      data.forEach((coin, index) => {
        const { name, current_price } = coin;

        const row = document.createElement('tr');
        row.innerHTML = `
          <th scope="row">${index + 1}</th>
          <td>${name}</td>
          <td>${current_price}</td>
        `;
        coinTableBody.appendChild(row);

        row.style.backgroundColor = index % 2 === 0 ? '#f3f3f3' : '#fff';
      });
    })
    .catch(error => {
      console.log('Kripto verileri alınamadı:', error);
    });
}
