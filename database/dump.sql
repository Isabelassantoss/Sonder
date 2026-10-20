--
-- PostgreSQL database dump
--

\restrict azhfaVPn4KL4Qpea6DKpRcJ7XH9Z8NGJtI85VKgfu0r9c2qJgn3OCL14cdZsNmf

-- Dumped from database version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)
-- Dumped by pg_dump version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: musicas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.musicas (
    id integer NOT NULL,
    titulo character varying(100) NOT NULL,
    artista character varying(100) NOT NULL,
    album character varying(100),
    nota numeric(2,1),
    comentario text,
    usuario_id integer
);


ALTER TABLE public.musicas OWNER TO postgres;

--
-- Name: musicas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.musicas_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.musicas_id_seq OWNER TO postgres;

--
-- Name: musicas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.musicas_id_seq OWNED BY public.musicas.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: sonder_user
--

CREATE TABLE public.usuarios (
    id integer NOT NULL,
    email character varying(100) NOT NULL,
    senha character varying(100) NOT NULL,
    nome character varying(100)
);


ALTER TABLE public.usuarios OWNER TO sonder_user;

--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: sonder_user
--

CREATE SEQUENCE public.usuarios_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usuarios_id_seq OWNER TO sonder_user;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: sonder_user
--

ALTER SEQUENCE public.usuarios_id_seq OWNED BY public.usuarios.id;


--
-- Name: musicas id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.musicas ALTER COLUMN id SET DEFAULT nextval('public.musicas_id_seq'::regclass);


--
-- Name: usuarios id; Type: DEFAULT; Schema: public; Owner: sonder_user
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);


--
-- Data for Name: musicas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.musicas (id, titulo, artista, album, nota, comentario, usuario_id) FROM stdin;
13	Sozinho	Caetano Veloso	 Prenda Minha	4.0	top	12
15	JETSKI	PEDRO SAMPAIO, MC Meno K, Melody	JETSKI	2.0	não gosto muito	13
21	Purple	Olivia Rodrigo	you seem pretty sad for a girl so in love	1.0	amo cor fav	19
22	333	Matue	333	5.0	Muitoooo bom amo muitooo	20
23	The Less I Know The Better	Tame Impala	Currents	5.0	Musica muito boa	21
26	Set 019	MC Carlin	MC Carlin musics	5.0	Melhor cantor de toda a historia musical	21
30	Eu te seguro	 Panda, MJ Records	 Panda Sem Moderação 2, Vol.3	4.0	muitoo boa	22
31	 Anjos (Pra quem tem fé)	O Rappa	 Nunca Tem Fim...	2.0	Música muito linda	4
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: sonder_user
--

COPY public.usuarios (id, email, senha, nome) FROM stdin;
1	isabela@gmail.com	123	\N
2	isabela@gmail.com	1234	\N
3	isabela@gmail.com	1234	\N
4	isabela@gmail	22	\N
5	isabela@gmail	22	\N
6	isabela@gmail.com	22	\N
7	isabela@gmail.com	22	\N
8	isabela@gmail.com	22	\N
9	isabela@gmail.com	22	\N
10	isabela@gmail.com	22	\N
11			
12	isabela@email	123	Isabela
13	sophie.carvalho@gmail.com	123456	Sophie
14			Migue
15	miguel.s.silva9@edu.senai.br	Gnms@2020	miguel gomes
16	jorge@jorge.com.br	123456	jorge
17	murillo@gmail.com	1234	Murillo Cena
18	isabela.santos@gmail	0808	Isabela Santos
19	catarine@gmail.com	catarine	catarine
20	gi@gmail	123	Giovanni
21	gabriel@email.com	Senha	Gabriel Braga
22	carolina@gmail	123	Carol
23	murillo@gmail.com	1234	murillo
\.


--
-- Name: musicas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.musicas_id_seq', 31, true);


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: sonder_user
--

SELECT pg_catalog.setval('public.usuarios_id_seq', 23, true);


--
-- Name: musicas musicas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.musicas
    ADD CONSTRAINT musicas_pkey PRIMARY KEY (id);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: sonder_user
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: musicas musicas_usuario_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.musicas
    ADD CONSTRAINT musicas_usuario_id_fkey FOREIGN KEY (usuario_id) REFERENCES public.usuarios(id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: pg_database_owner
--

GRANT USAGE ON SCHEMA public TO sonder_user;


--
-- Name: TABLE musicas; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.musicas TO sonder_user;


--
-- Name: SEQUENCE musicas_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.musicas_id_seq TO sonder_user;


--
-- PostgreSQL database dump complete
--

\unrestrict azhfaVPn4KL4Qpea6DKpRcJ7XH9Z8NGJtI85VKgfu0r9c2qJgn3OCL14cdZsNmf

