window.addEventListener('load', () => {
    preventFormSubmit();
});

function formatDate(value) {
    return new Intl.DateTimeFormat('pt-BR').format(new Date((value)));
}

function formatCnpjCpf(value) {
    const CPF_LENGTH = 11;
    const cnpjCpf = value.replace(/\D/g, '');

    if (cnpjCpf.length === CPF_LENGTH) {
        return cnpjCpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, "\$1.\$2.\$3-\$4");
    }

    return cnpjCpf.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g, "\$1.\$2.\$3/\$4-\$5");
}

async function whoisBr(url) {
    let dataUrl = document.querySelector('#dataUrl');
    try {
        const rdapRegistroBR = await fetch(`https://rdap.registro.br/domain/${url}`);
        const dataRegistroBR = await rdapRegistroBR.json();
        const { ldhName, entities, nameservers, events, status } = dataRegistroBR;

        dataUrl.innerHTML = `
        <label class="lead font-weight-bold mt-3">Domínio: ${ldhName}</label>
        
        <tbody>
            <tr>
                <th scope="row">Titular / Responsável</th>
                <td>${entities[0].legalRepresentative}</td>
            </tr>
            <tr>
                <th scope="row">Documento</th>
                <td>${formatCnpjCpf(entities[0].handle)}</td>
            </tr>
            <tr>
                <th scope="row">País</th>
                <td>BR</td>
            </tr>
            <tr>
                <th scope="row">Contato titular</th>
                <td>${entities[0].entities[0].handle}</td>
            </tr>
            <tr>
                <th scope="row">Contato técnico</th>
                <td>${entities[1].handle}</td>
            </tr>
            <tr>
                <th scope="row">Servidor DNS Primário</th>
                <td>${nameservers[0].ldhName}</td>
            </tr>
            <tr>
                <th scope="row">Status / Último OK</th>
                <td>${formatDate(nameservers[0].events[0].eventDate)} ${nameservers[0].events[0].status[0].replace('ns', '').toUpperCase()} / ${formatDate(nameservers[0].events[1].eventDate)}</td>
            </tr>
            <tr>
                <th scope="row">Servidor DNS Secundário</th>
                <td>${nameservers[1].ldhName}</td>
            </tr>
            <tr>
                <th scope="row">Status / Último OK</th>
                <td>${formatDate(nameservers[1].events[0].eventDate)} ${nameservers[1].events[0].status[0].replace('ns', '').toUpperCase()} / ${formatDate(nameservers[1].events[1].eventDate)}</td>
            </tr>
            <tr>
                <th scope="row">Criado</th>
                <td>${formatDate(events[0].eventDate)}</td>
            </tr>
            <tr>
                <th scope="row">Expiração</th>
                <td>${formatDate(events[2].eventDate)}</td>
            </tr>
            <tr>
                <th scope="row">Alterado</th>
                <td>${formatDate(events[1].eventDate)}</td>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <td>${status[0] === 'active' ? 'Publicado' : 'Active'}</td>
            </tr>
        </tbody>

        <label class="lead font-weight-bold mt-3">Contato (ID): ${entities[0].entities[0].handle}</label>
        
        <tbody>
            <tr>
                <th scope="row">Nome</th>
                <td>${entities[0].entities[0].vcardArray[1][2][3]}</td>
            </tr>
            <tr>
                <th scope="row">E-mail</th>
                <td>${entities[0].entities[0].vcardArray[1][3][3]}</td>
            </tr>
            <tr>
                <th scope="row">País</th>
                <td>${entities[0].entities[0].vcardArray[1][5][3][6]}</td>
            </tr>
            <tr>
                <th scope="row">Criado</th>
                <td>${formatDate(entities[0].entities[0].events[0].eventDate)}</td>
            </tr>
            <tr>
                <th scope="row">Alterado</th>
                <td>${formatDate(entities[0].entities[0].events[1].eventDate)}</td>
            </tr>
        </tbody>
                
        
        <label class="lead font-weight-bold mt-3 contatoTecnico">Contato (ID): ${entities[1].handle}</label>
        
        <tbody id="contatoTecnico" class="contatoTecnico">
            <tr>
                <th scope="row">Nome</th>
                <td>${entities[1].vcardArray[1][2][3]}</td>
            </tr>
            <tr>
                <th scope="row">E-mail</th>
                <td>${entities[1].vcardArray[1][3][3]}</td>
            </tr>
            <tr>
                <th scope="row">País</th>
                <td>${entities[1].vcardArray[1][5][3][6]}</td>
            </tr>
            <tr>
                <th scope="row">Criado</th>
                <td>${formatDate(entities[1].events[0].eventDate)}</td>
            </tr>
            <tr>
                <th scope="row">Alterado</th>
                <td>${formatDate(entities[1].events[1].eventDate)}</td>
            </tr>
        </tbody>
                
        `;

        if (entities[0].entities[0].handle === entities[1].handle) {
            const contatoTecnico = document.querySelectorAll('.contatoTecnico');
            contatoTecnico.forEach(contato => {
                contato.style.display = 'none';
            })
        }
    } catch (error) {
        dataUrl.innerHTML = `
        <label class="lead font-weight-bold mt-3">Domínio: <span class="text-danger">Consulta inválida</span></label>
        `;
    }
}

function clearUrl(url) {
    const newUrl = url.replace(/^https?:\/\//, '');
    return newUrl;
}

function showUrlResults() {
    let urlDomain = document.querySelector('#urlDomain').value;

    if (urlDomain.indexOf('com.br')) {
        whoisBr(clearUrl(urlDomain));
    } else {
        console.log('Não é um domínio .com.br2');
    }
}


function preventFormSubmit() {
    let spinner = document.querySelector('.spinner-border');
    let formWhois = document.querySelector('#formWhois');
    formWhois.addEventListener('submit', handleSubmit);
    
    function handleSubmit(event) {
        event.preventDefault();
        spinner.classList.remove('d-none');
        setTimeout(() => {
            spinner.classList.add('d-none');
            showUrlResults();
        }, 3000);
    }
}