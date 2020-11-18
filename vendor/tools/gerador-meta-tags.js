window.addEventListener('load', () => {
    preventFormSubmit();
    metaTagTitle();
    metaTagDescription();
    metaTagKeywords();
    metaTagAuthor();
    metaTagRobots();
    metaTagCharset();
    metaTagLanguage();
});

function copiedContent(result, changeAttr) {
    result.select();
    result.setSelectionRange(0, 99999); /*mobile devices*/
    document.execCommand("copy"); /* Copy the text inside the text field */
    changeAttr.dataset.originalTitle = "Copiado!";
}

function metaTagTitle() {
    let metaTitle = document.querySelector('#metaTitle');
    let metaTitleCount = document.querySelector('#metaTitleCount');
    let contentMetaTitle = document.querySelector('#contentMetaTitle');
    let copyClipboard = document.querySelector('#copyClipboard');

    let barSize = document.querySelector('#barSize');
    let smile = document.querySelector('#smile');

    metaTitle.addEventListener('input', () => {
        metaTitleCount.innerHTML = metaTitle.value.length;

        if (metaTitle.value.length === 0 || metaTitle.value.length <= 44) {     
            smile.innerHTML = '&#x1F610;';
            barSize.value = metaTitle.value.length;
        } else if (metaTitle.value.length === 45 || metaTitle.value.length <= 66) {
            smile.innerHTML = '&#x1F603';
            barSize.value = metaTitle.value.length;
        } else {
            smile.innerHTML = '&#x1F61F;';
            barSize.value = metaTitle.value.length;
        }

        contentMetaTitle.value = `<title>${metaTitle.value}</title>`;
    });

    copyClipboard.addEventListener('click', () => copiedContent(contentMetaTitle, copyClipboard));
}

function metaTagDescription() {
    let metaDescription = document.querySelector('#metaDescription');
    let metaDescriptionCount = document.querySelector('#metaDescriptionCount');
    let contentMetaDescription = document.querySelector('#contentMetaDescription');
    let copyClipboard = document.querySelector('#copyClipboard2');
    
    let barSize2 = document.querySelector('#barSize2');
    let smile2 = document.querySelector('#smile2');

    metaDescription.addEventListener('input', () => {
        metaDescriptionCount.innerHTML = metaDescription.value.length;

        if (metaDescription.value.length === 0 || metaDescription.value.length <= 139) {     
            smile2.innerHTML = '&#x1F610;';
            barSize2.value = metaDescription.value.length;
        } else if (metaDescription.value.length === 140 || metaDescription.value.length <= 160) {
            smile2.innerHTML = '&#x1F603';
            barSize2.value = metaDescription.value.length;
        } else {
            smile2.innerHTML = '&#x1F61F;';
            barSize2.value = metaDescription.value.length;
        }
        
        contentMetaDescription.value = `<meta name="description" content="${metaDescription.value}" />`;
    });

    copyClipboard.addEventListener('click', () => copiedContent(contentMetaDescription, copyClipboard));
}

function metaTagKeywords() {
    let metaKeywords = document.querySelector('#metaKeywords');
    let metaKeywordsCount = document.querySelector('#metaKeywordsCount');
    let contentMetaKeywords = document.querySelector('#contentMetaKeywords');
    let copyClipboard = document.querySelector('#copyClipboard3');

    let barSize3 = document.querySelector('#barSize3');
    let smile3 = document.querySelector('#smile3');

    metaKeywords.addEventListener('input', () => {
        let keyword = metaKeywords.value.split("  ").join(",");
        let keywordLength = keyword.split(",").length;
        metaKeywordsCount.innerHTML = keywordLength;

        if (keywordLength === 0 || keywordLength <= 3) {     
            smile3.innerHTML = '&#x1F610;';
            barSize3.value = keywordLength;
        } else if (keywordLength === 4 || keywordLength <= 10) {
            smile3.innerHTML = '&#x1F603';
            barSize3.value = keywordLength;
        } else {
            smile3.innerHTML = '&#x1F61F;';
            barSize3.value = keywordLength;
        }
        
        contentMetaKeywords.value = `<meta name="keywords" content="${keyword}" />`;
    });

    copyClipboard.addEventListener('click', () => copiedContent(contentMetaKeywords, copyClipboard));
}

function metaTagAuthor() {
    let metaAuthor = document.querySelector('#metaAuthor');
    let contentMetaAuthor = document.querySelector('#contentMetaAuthor');
    let copyClipboard = document.querySelector('#copyClipboard4');

    metaAuthor.addEventListener('input', () => {
        contentMetaAuthor.value = `<meta name="author" content="${metaAuthor.value}" />`;;
    });

    copyClipboard.addEventListener('click', () => copiedContent(contentMetaAuthor, copyClipboard));
}

function metaTagRobots() {
    let metaRobots = document.querySelector('#metaRobots');
    let contentMetaRobots = document.querySelector('#contentMetaRobots');
    let copyClipboard = document.querySelector('#copyClipboard5');

    metaRobots.addEventListener('input', () => {
        if (metaRobots.value === "selecionar") {
            contentMetaRobots.value = "";
        } else {
            contentMetaRobots.value = `<meta name="robots" content="${metaRobots.value.split("-").join(",")}" />`;
        }
    });

    copyClipboard.addEventListener('click', () => copiedContent(contentMetaRobots, copyClipboard));
}

function metaTagCharset() {
    let metaCharset = document.querySelector('#metaCharset');
    let contentMetaCharset = document.querySelector('#contentMetaCharset');
    let copyClipboard = document.querySelector('#copyClipboard6');

    metaCharset.addEventListener('input', () => {
        if (metaCharset.value === "selecionar") {
            contentMetaCharset.value = "";
        } else {
            contentMetaCharset.value = `<meta http-equiv="Content-Type" content="text/html;charset=${metaCharset.value}" />`;
        }
    });

    copyClipboard.addEventListener('click', () => copiedContent(contentMetaCharset, copyClipboard));
}

function metaTagLanguage() {
    let metaLanguage = document.querySelector('#metaLanguage');
    let contentMetaLanguage = document.querySelector('#contentMetaLanguage');
    let copyClipboard = document.querySelector('#copyClipboard7');

    metaLanguage.addEventListener('input', () => {
        if (metaLanguage.value === "selecionar") {
            contentMetaLanguage.value = "";
        } else {
            contentMetaLanguage.value = `<meta http-equiv="Content-Language" content="${metaLanguage.value}" />`;
        }
    });

    copyClipboard.addEventListener('click', () => copiedContent(contentMetaLanguage, copyClipboard));
}

function metaTagResults() {
    let contentMetaResult = document.querySelector('#contentMetaResult');
    let copyClipboard = document.querySelector('#copyClipboard8');

    contentMetaResult.value =
        `<head>
    ${contentMetaTitle.value}
    ${contentMetaDescription.value}
    ${contentMetaKeywords.value}
    ${contentMetaAuthor.value}
    ${contentMetaRobots.value}
    ${contentMetaCharset.value}
    ${contentMetaLanguage.value}
</head>`

    copyClipboard.addEventListener('click', () => copiedContent(contentMetaResult, copyClipboard));
}

function preventFormSubmit() {
    function handleSubmit(event) {
        event.preventDefault();
        metaTagResults();
    }

    let formMetaTags = document.querySelector('#formMetaTags');
    formMetaTags.addEventListener('submit', handleSubmit);
}