document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('review-form');
    const reviewsContainer = document.getElementById('reviews-container');

    // Load existing reviews from local storage
    loadReviews();

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Get form values
        const name = document.getElementById('name').value.trim();
        const rating = parseInt(document.getElementById('rating').value, 10);
        const comments = document.getElementById('comments').value.trim();

        if (!name || isNaN(rating) || !comments) {
            alert('Please fill out all fields correctly.');
            return;
        }

        // Create review object
        const newReview = {
            name,
            rating,
            comments,
            timestamp: new Date().toISOString(),
            replies: []
        };

        // Save review to local storage
        saveReview(newReview);

        // Clear form fields
        form.reset();

        // Add review to the UI
        addReviewToUI(newReview);
    });

    function saveReview(review) {
        let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
        reviews.push(review);
        localStorage.setItem('reviews', JSON.stringify(reviews));
    }

    function loadReviews() {
        let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
        reviews.forEach(addReviewToUI);
    }

    function addReviewToUI(review) {
        const reviewItem = document.createElement('div');
        reviewItem.classList.add('review-item');
        reviewItem.innerHTML = `
            <p class="rating">Rating: ${'★'.repeat(review.rating)}${'☆'.repeat(5 - review.rating)}</p>
            <p><strong>${escapeHtml(review.name)}</strong> (${new Date(review.timestamp).toLocaleString()}):</p>
            <p>${escapeHtml(review.comments)}</p>
            <button class="delete-button" onclick="deleteReview('${escapeHtml(review.timestamp)}')">Delete Review</button>
            <div class="reply-section">
                <h4>Admin Replies:</h4>
                <div class="replies-container" id="replies-${escapeHtml(review.timestamp)}"></div>
                <form class="reply-form" data-review-time="${escapeHtml(review.timestamp)}">
                    <textarea placeholder="Write a reply..." required></textarea>
                    <button type="submit">Reply</button>
                </form>
            </div>
        `;
        reviewsContainer.appendChild(reviewItem);

        const replyForm = reviewItem.querySelector('.reply-form');
        replyForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const replyText = this.querySelector('textarea').value.trim();
            if (replyText) {
                addReplyToUI(replyText, this.dataset.reviewTime);
                saveReply(replyText, this.dataset.reviewTime);
                this.reset();
            }
        });

        loadReplies(review.timestamp);
    }

    function addReplyToUI(replyText, reviewTime) {
        const repliesContainer = document.getElementById(`replies-${reviewTime}`);
        const replyItem = document.createElement('div');
        replyItem.classList.add('reply-item');
        replyItem.innerHTML = `
            ${escapeHtml(replyText)}
            <button class="delete-button" onclick="deleteReply('${reviewTime}', '${escapeHtml(replyText)}')">Delete Reply</button>
        `;
        repliesContainer.appendChild(replyItem);
    }

    function saveReply(replyText, reviewTime) {
        let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
        reviews = reviews.map(review => {
            if (review.timestamp === reviewTime) {
                review.replies.push(replyText);
            }
            return review;
        });
        localStorage.setItem('reviews', JSON.stringify(reviews));
    }

    function loadReplies(reviewTime) {
        let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
        const review = reviews.find(r => r.timestamp === reviewTime);
        if (review && review.replies) {
            review.replies.forEach(reply => addReplyToUI(reply, reviewTime));
        }
    }

    window.deleteReview = function (timestamp) {
        let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
        reviews = reviews.filter(review => review.timestamp !== timestamp);
        localStorage.setItem('reviews', JSON.stringify(reviews));
        reviewsContainer.innerHTML = '';
        loadReviews();
    };

    window.deleteReply = function (reviewTime, replyText) {
        let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
        reviews = reviews.map(review => {
            if (review.timestamp === reviewTime) {
                review.replies = review.replies.filter(reply => reply !== replyText);
            }
            return review;
        });
        localStorage.setItem('reviews', JSON.stringify(reviews));
        document.getElementById(`replies-${reviewTime}`).innerHTML = '';
        loadReplies(reviewTime);
    };

    function escapeHtml(unsafe) {
        return unsafe
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }
});
