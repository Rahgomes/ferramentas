window.addEventListener('load', () => {
    removeCode();
});

function copiedContent(result, changeAttr) {
    result.select();
    result.setSelectionRange(0, 99999); /*mobile devices*/
    document.execCommand("copy"); /* Copy the text inside the text field */
    changeAttr.dataset.originalTitle = "Copiado!";
}

function removeCode() {
    let codeArea = document.querySelector('#codeArea');
    let textArea = document.querySelector('#textArea');
    let copyClipboard = document.querySelector('#copyClipboard');

    String.prototype.stripHTML = function () { return this.replace(/(<([^>]+)>)/gi, ""); }

    codeArea.addEventListener('input', () => {
        textArea.value = `${codeArea.value.stripHTML()}`;
    });

    copyClipboard.addEventListener('click', () => copiedContent(textArea, copyClipboard));
}
