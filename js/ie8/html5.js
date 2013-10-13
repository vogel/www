var elements = ['header', 'nav', 'section', 'article', 'aside', 'footer'],
    i = 0,
    create = document.createElement;

for (i; i < elements.length; i += 1) {
    create(elements[i]);
}