<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.pinimg.com/736x/3d/08/3a/3d083abe85491ac8cb109cdf9c6bc453.jpg">
    <title>Local Mind</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* En-tête avec boutons de connexion */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            margin-bottom: 30px;
            border-bottom: 1px solid #e1e5eb;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #4a6baf;
        }

        .logo span {
            color: #f36f6f;
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-size: 16px;
        }

        .btn-signin {
            background-color: transparent;
            border: 2px solid #4a6baf;
            color: #4a6baf;
        }

        .btn-signup {
            background-color: #4a6baf;
            color: white;
        }

        .btn-signin:hover {
            background-color: #4a6baf;
            color: white;
        }

        .btn-signup:hover {
            background-color: #3a5a9f;
        }

        .btn-primary {
            background-color: #4a6baf;
            color: white;
        }

        .btn-primary:hover {
            background-color: #3a5a9f;
        }

        /* Section d'ajout de question */
        .add-question-section {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 25px;
            margin-bottom: 30px;
        }

        .add-question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .add-question-title {
            font-size: 22px;
            color: #333;
        }

        .toggle-form-btn {
            background-color: #f0f4ff;
            color: #4a6baf;
            border: 1px solid #4a6baf;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
        }

        .toggle-form-btn:hover {
            background-color: #e1e9ff;
        }

        .question-form {
            display: none;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e1e5eb;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #4a6baf;
            box-shadow: 0 0 0 3px rgba(74, 107, 175, 0.1);
        }

        .form-textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-footer {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 25px;
        }

        .form-cancel {
            background-color: #f5f5f5;
            color: #666;
            border: 1px solid #ddd;
        }

        .form-cancel:hover {
            background-color: #eaeaea;
        }

        .tags-input-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 8px;
            min-height: 42px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        .tag {
            background-color: #eef2ff;
            color: #4a6baf;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .tag-remove {
            cursor: pointer;
            font-size: 12px;
        }

        .tags-input {
            flex-grow: 1;
            border: none;
            padding: 5px;
            font-size: 16px;
            min-width: 150px;
        }

        .tags-input:focus {
            outline: none;
        }

        .tags-hint {
            font-size: 14px;
            color: #888;
            margin-top: 5px;
        }

        /* Section principale */
        .page-title {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
            font-size: 32px;
        }

        .questions-container {
            display: grid;
            gap: 25px;
            margin-bottom: 40px;
        }

        /* Carte de question */
        .question-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 25px;
            transition: transform 0.3s ease;
        }

        .question-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        }

        .question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .question-author {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .author-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e1e5eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #4a6baf;
        }

        .author-name {
            font-weight: 600;
            color: #333;
        }

        .question-date {
            color: #888;
            font-size: 14px;
        }

        .question-title {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
        }

        .question-content {
            color: #555;
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .question-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        /* Section des commentaires */
        .comments-section {
            margin-top: 20px;
        }

        .comments-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .comments-title {
            font-size: 18px;
            color: #333;
        }

        .add-comment {
            display: flex;
            margin-bottom: 20px;
        }

        .comment-input {
            flex-grow: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px 0 0 6px;
            font-size: 16px;
            resize: vertical;
            min-height: 50px;
        }

        .comment-submit {
            background-color: #4a6baf;
            color: white;
            border: none;
            border-radius: 0 6px 6px 0;
            padding: 0 20px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .comment-submit:hover {
            background-color: #3a5a9f;
        }

        .view-comments-btn {
            background-color: transparent;
            border: 1px solid #ddd;
            color: #555;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .view-comments-btn:hover {
            background-color: #f5f7fa;
        }

        .comments-container {
            display: none;
            margin-top: 20px;
        }

        .comment {
            padding: 15px;
            background-color: #f9fafc;
            border-radius: 8px;
            margin-bottom: 10px;
            border-left: 4px solid #4a6baf;
        }

        .comment-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .comment-author {
            font-weight: 600;
            color: #333;
        }

        .comment-date {
            color: #888;
        }

        .comment-content {
            color: #555;
            line-height: 1.5;
        }

        /* Section des likes */
        .likes-section {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        .like-btn {
            background-color: transparent;
            border: 1px solid #ddd;
            color: #555;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
        }

        .like-btn:hover {
            background-color: #fff0f0;
            color: #f36f6f;
            border-color: #f36f6f;
        }

        .like-btn.liked {
            background-color: #fff0f0;
            color: #f36f6f;
            border-color: #f36f6f;
        }

        .like-count {
            font-weight: 600;
            color: #555;
        }

        /* Aucune question message */
        .no-questions {
            text-align: center;
            padding: 50px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .no-questions-icon {
            font-size: 48px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .no-questions-text {
            font-size: 18px;
            color: #888;
            margin-bottom: 20px;
        }

        /* Pied de page */
        footer {
            text-align: center;
            padding: 30px 0;
            margin-top: 50px;
            color: #888;
            border-top: 1px solid #e1e5eb;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            header {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .page-title {
                font-size: 26px;
            }

            .question-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .add-comment {
                flex-direction: column;
            }

            .comment-input {
                border-radius: 6px;
                margin-bottom: 10px;
            }

            .comment-submit {
                border-radius: 6px;
                padding: 12px;
            }

            .form-footer {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">Q&<span>A</span></div>
            <div class="auth-buttons">
                @guest
                    <button class="btn btn-signin" id="signin">
                        <i class="fas fa-sign-in-alt"></i> <a href="/Login">Se connecter</a>
                    </button>
                    <button class="btn btn-signup" id="signupBtn">
                        <i class="fas fa-user-plus"></i> <a href="/singin">S'inscrire</a>
                    </button>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-signout" id="signout">
                            <i class="fas fa-sign-out-alt"></i> Se deconnecter
                        </button>
                    </form>
                @endauth
            </div>
        </header>

        <main>
            <h1 class="page-title">Questions de la communauté</h1>

            <!-- Section d'ajout de question -->
            <section class="add-question-section">
                <div class="add-question-header">
                    <h2 class="add-question-title">Poser une nouvelle question</h2>
                    <button class="toggle-form-btn" id="toggleFormBtn">
                        <i class="fas fa-plus-circle"></i> Ajouter une question
                    </button>
                </div>

                <form action="{{ route('question.store') }}" method="POST" class="question-form" id="questionForm">
                    @csrf
                    <div class="form-group">
                        <label for="questionTitle" class="form-label">Titre de la question *</label>
                        <input name="title" type="text" id="questionTitle" class="form-input"
                            placeholder="Quelle est votre question ?" required>
                    </div>

                    <div class="form-group">
                        <label for="questionContent" class="form-label">Description détaillée *</label>
                        <textarea name="description" id="questionContent" class="form-textarea" placeholder="Décrivez votre question en détails..." required></textarea>
                    </div>

                    <div class="form-footer">
                        <button type="button" class="btn form-cancel" id="cancelFormBtn">Annuler</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Publier la question
                        </button>
                    </div>
                </form>
            </section>

            <!-- Liste des questions -->
            <div class="questions-container" id="questionsContainer">
                <!-- Les questions seront chargées ici dynamiquement -->
                <!-- Question 1 -->
                @foreach ($questions as $question)
                    <div class="question question-card" data-id="{{ $question->id }}">
                        <div class="question-header">
                            <div class="question-author">
                                <div class="author-avatar">VO</div>
                                <div>
                                    <div class="author-name">{{ $question->user->name }}</div>
                                    <div class="question-date">Publié le {{ $question->created_at }}</div>
                                </div>
                            </div>
                            @php
                                $isLiked = $question->likes()->where('user_id', auth()->user()->id)->exists();
                            @endphp
                            <div class="likes-section">
                                @if ($isLiked)

                                    <form action="{{ route('unlike') }}" method="POST" class="like-form">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="question_id" value="{{ $question->id }}">
                                        <button class="like-btn liked" data-question="1">
                                            <i class="fas fa-heart"></i> J'aime pas
                                        </button>
                                    </form>

                                @else
                                    <form action="{{ route('like') }}" method="POST" class="like-form">
                                        @csrf
                                        <input type="hidden" name="question_id" value="{{ $question->id }}">
                                        <button class="like-btn" data-question="1">
                                            <i class="fas fa-heart"></i> J'aime
                                        </button>
                                    </form>

                                @endif
                                <span class="like-count" id="likeCount1">{{ $question->likes_count }}</span>
                            </div>
                        </div>

                        <h2 class="question-title">{{ $question->title }}</h2>
                        <p class="question-content">
                            {{ $question->content }}
                        </p>

                        <div class="question-tags">
                            <span class="tag">développement web</span>
                            <span class="tag">programmation</span>
                            <span class="tag">apprentissage</span>
                        </div>

                        <div class="comments-section">
                            <div class="comments-header">
                                <h3 class="comments-title">Commentaires</h3>
                                <button class="view-comments-btn" data-question="{{ $question->id }}">
                                    <i class="fas fa-comments"></i> Voir les commentaires
                                </button>
                            </div>

                            <form action="{{ route('comment.store') }}" method="POST" class="add-comment">
                                @csrf
                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                <textarea name="description" class="comment-input" placeholder="Ajouter un commentaire..." data-question="{{ $question->id }}"></textarea>
                                <button class="comment-submit" data-question="{{ $question->id }}">Commenter</button>
                            </form>

                            <div class="comments-container" id="comments{{ $question->id }}">
                                @foreach ($question->comments as $comment)
                                    <div class="comment">
                                        <div class="comment-header">
                                            <span class="comment-author">{{ $comment->user->name }}</span>
                                            <span class="comment-date">{{ $comment->created_at }}</span>
                                        </div>
                                        <p class="comment-content">
                                            {{ $comment->content }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Message quand il n'y a pas de questions -->
            <div class="no-questions" id="noQuestionsMessage" style="display: none;">
                <div class="no-questions-icon">
                    <i class="far fa-question-circle"></i>
                </div>
                <p class="no-questions-text">Aucune question n'a été posée pour le moment.</p>
                <button class="btn btn-primary" id="addFirstQuestionBtn">
                    <i class="fas fa-plus-circle"></i> Poser la première question
                </button>
            </div>
        </main>

        <footer>
            <p>Plateforme de questions et réponses &copy; 2023. Tous droits réservés.</p>
        </footer>
    </div>

    <script>
        // Variables globales
        let questionIdCounter = 3; // Commence à 3 car nous avons déjà 2 questions
        let tags = [];

        // DOM Elements
        const toggleFormBtn = document.getElementById('toggleFormBtn');
        const questionForm = document.getElementById('questionForm');
        const cancelFormBtn = document.getElementById('cancelFormBtn');
        const questionTitleInput = document.getElementById('questionTitle');
        const questionContentInput = document.getElementById('questionContent');
        const tagInput = document.getElementById('tagInput');
        const tagsContainer = document.getElementById('tagsContainer');
        const questionsContainer = document.getElementById('questionsContainer');
        const noQuestionsMessage = document.getElementById('noQuestionsMessage');
        const addFirstQuestionBtn = document.getElementById('addFirstQuestionBtn');

        // Gestion de l'affichage du formulaire
        toggleFormBtn.addEventListener('click', function() {
            const isFormVisible = questionForm.style.display === 'block';

            if (isFormVisible) {
                hideForm();
            } else {
                showForm();
            }
        });

        // Gestion de l'annulation du formulaire
        cancelFormBtn.addEventListener('click', function() {
            hideForm();
            resetForm();
        });

        // Bouton pour ajouter la première question
        addFirstQuestionBtn.addEventListener('click', function() {
            showForm();
        });

        // Fonctions utilitaires
        function showForm() {
            questionForm.style.display = 'block';
            toggleFormBtn.innerHTML = '<i class="fas fa-times"></i> Annuler';
            toggleFormBtn.style.backgroundColor = '#f5f5f5';
            toggleFormBtn.style.color = '#666';
            toggleFormBtn.style.borderColor = '#ddd';
        }

        function hideForm() {
            questionForm.style.display = 'none';
            toggleFormBtn.innerHTML = '<i class="fas fa-plus-circle"></i> Ajouter une question';
            toggleFormBtn.style.backgroundColor = '#f0f4ff';
            toggleFormBtn.style.color = '#4a6baf';
            toggleFormBtn.style.borderColor = '#4a6baf';
        }

        function resetForm() {
            questionTitleInput.value = '';
            questionContentInput.value = '';
            tags = [];
            updateTagsDisplay();
        }

        questionsContainer.querySelectorAll('.question').forEach(question => {
            const questionId = question.getAttribute('data-id');
            const viewCommentsBtn = document.querySelector(`.view-comments-btn[data-question="${questionId}"]`);
            if (viewCommentsBtn) {
                viewCommentsBtn.addEventListener('click', function() {
                    const commentsContainer = document.getElementById(`comments${questionId}`);
                    const isVisible = commentsContainer.style.display === 'block';

                    if (isVisible) {
                        commentsContainer.style.display = 'none';
                        this.innerHTML = '<i class="fas fa-comments"></i> Voir les commentaires';
                    } else {
                        commentsContainer.style.display = 'block';
                        this.innerHTML = '<i class="fas fa-times"></i> Masquer les commentaires';
                    }
                });
            }
        })

    </script>
</body>

</html>
