const grid = document.querySelector('.grid')
if (grid) {
  const masonry = new Masonry(grid, {
    itemSelector: '.grid-item',
  })
}
