async function printTicketNCF() {
    const queryString = window.location.search
    const urlParams = new URLSearchParams(queryString);
    const code = urlParams.get('code')
    const url = `http://162.243.165.91:8002/api/invoices/${code}/pdf`
    window.open(url, '_blank').focus();
}