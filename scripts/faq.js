document.addEventListener('DOMContentLoaded', () => {
    const questions = document.querySelectorAll('.faq__question');
    
    questions.forEach(question => {
        question.addEventListener('click', () => {
            const answerId = question.getAttribute('data-toggle');
            const answer = document.getElementById(answerId);
            
            // Toggle the visibility of the answer with smooth transition
            if (answer.classList.contains('show')) {
                answer.classList.remove('show');
            } else {
                // Close any open answers
                document.querySelectorAll('.faq__answer.show').forEach(openAnswer => {
                    openAnswer.classList.remove('show');
                });
                answer.classList.add('show');
            }
        });
    });
});