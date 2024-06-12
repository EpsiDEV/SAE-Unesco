-- Assuming the 'trad' table already exists
-- Insert French translations
INSERT INTO trad (key, lang, translation) VALUES
('title', 'fr', 'Plan'),
('home', 'fr', 'Accueil'),
('plan', 'fr', 'Plan'),
('architecture', 'fr', 'Architecture'),
('histoire', 'fr', 'Histoire'),
('jardin', 'fr', 'Jardin'),
('about', 'fr', 'À propos'),
('header_title', 'fr', 'Château de Fontainebleau'),
('francois_title', 'fr', 'François 1er'),
('francois_text', 'fr', 'Description en français de François 1er.'),
('learn_more', 'fr', 'En savoir plus'),
('forest_title', 'fr', 'Forêt de Fontainebleau'),
('forest_more', 'fr', 'Découvrir la forêt'),
('castle_hours', 'fr', 'Horaires du château'),
('footer_text', 'fr', '© 2024 Forum UNESCO')
ON CONFLICT (key, lang) DO NOTHING;

-- Insert English translations
INSERT INTO trad (key, lang, translation) VALUES
('title', 'en', 'Plan'),
('home', 'en', 'Home'),
('plan', 'en', 'Plan'),
('architecture', 'en', 'Architecture'),
('histoire', 'en', 'History'),
('jardin', 'en', 'Garden'),
('about', 'en', 'About'),
('header_title', 'en', 'Fontainebleau Castle'),
('francois_title', 'en', 'Francis I'),
('francois_text', 'en', 'English description of Francis I.'),
('learn_more', 'en', 'Learn more'),
('forest_title', 'en', 'Fontainebleau Forest'),
('forest_more', 'en', 'Discover the forest'),
('castle_hours', 'en', 'Castle hours'),
('footer_text', 'en', '© 2024 Forum UNESCO')
ON CONFLICT (key, lang) DO NOTHING;

-- Insert Spanish translations
INSERT INTO trad (key, lang, translation) VALUES
('title', 'es', 'Plan'),
('home', 'es', 'Inicio'),
('plan', 'es', 'Plan'),
('architecture', 'es', 'Arquitectura'),
('histoire', 'es', 'Historia'),
('jardin', 'es', 'Jardín'),
('about', 'es', 'Acerca de'),
('header_title', 'es', 'Castillo de Fontainebleau'),
('francois_title', 'es', 'Francisco I'),
('francois_text', 'es', 'Descripción en español de Francisco I.'),
('learn_more', 'es', 'Aprender más'),
('forest_title', 'es', 'Bosque de Fontainebleau'),
('forest_more', 'es', 'Descubrir el bosque'),
('castle_hours', 'es', 'Horarios del castillo'),
('footer_text', 'es', '© 2024 Forum UNESCO')
ON CONFLICT (key, lang) DO NOTHING;
