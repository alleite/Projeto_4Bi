create database najubeauty 
CREATE TABLE produtos(
nome VARCHAR(100) NOT NULL,
preco Float(5,2) NOT NULL,
imagem VARCHAR(50) NOT NULL,
descricao VARCHAR(200) NOT NULL,
id int AUTO_INCREMENT PRIMARY KEY);

INSERT INTO produtos (id, nome, preco, imagem, descricao) VALUES
(1, 'Cerave', 99.00, 'img/cerave.jpg', 'CeraVe Rosto & Corpo- Loção Hidratante de 473ml.'),
(2, 'Neutrogena', 43.90, 'img/neutrogena.png', 'Neutrogena Sun Fresh Protetor Solar Facial FPS70, 40g.'),
(3, 'Lip Balm', 79.00, 'img/sephora.png', 'Hidratante labial sephora collection colorful lip balm.'),
(4, 'Bepantol', 28.99, 'img/bepantol.png', 'Bepantol Derma Toque Seco, Hidratante Corporal Multirestaurador, para Pele Sensível e Extrasseca, 20g.'),
(5, 'Nivea Acne', 24.90, 'img/nivea.png', 'NIVEA ACNE control Sabonete em Gel Limpeza Profunda dos Poros Limpa profundamente os poros.'),
(6, 'Massageador', 24.90, 'img/massageador.png', 'Massageador Facial Água Marinha Roller Rosto Pescoço Antirrugas.');
