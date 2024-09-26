$(document).ready(function() {
    const wishlistContainer = $('#wishlist-items');

    function loadWishlist() {
        $.ajax({
            url: `${baseUrl}/wishlist/get`,
            method: 'GET',
            headers: apiHeaders,
            success: function(response) {
                if (response.length === 0) {
                    wishlistContainer.html('<tr><td colspan="4" class="text-center fs-4">Your wishlist is empty</td></tr>');
                    return;
                }

                wishlistContainer.empty();
                response.forEach(book => {
                    const itemHtml = `
                        <tr>
                            <td class="product-thumbnail">
                                <img src="${book.cover}" alt="${book.title}" style="max-width: 100px;">
                            </td>
                            <td class="product-name">
                                <h4 class="mb-2 fw-bold">${book.title}</h4>
                            </td>
                            <td class="product-price-cart">
                                <span class="amount fs-5">Rp ${book.price}</span>
                            </td>
                            <td class="product-remove">
                                <a href="${baseUrl}/book/${book.id}" class="btn btn-success btn-lg btn-block text-white">Buy Now</a>
                            </td>
                        </tr>
                    `;
                    wishlistContainer.append(itemHtml);
                });
            },
            error: function(error) {
                console.error('Error fetching wishlist:', error);
                wishlistContainer.html('<tr><td colspan="4" class="text-center fs-4">Error loading wishlist. Please try again.</td></tr>');
            }
        });
    }

    loadWishlist();
});