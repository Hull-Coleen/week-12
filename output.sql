--
-- PostgreSQL database dump
--

-- Dumped from database version 10.3 (Ubuntu 10.3-1.pgdg16.04+1)
-- Dumped by pg_dump version 10.4 (Ubuntu 10.4-2.pgdg16.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: cart; Type: TABLE; Schema: public; Owner: flljclgzlhstxd
--

CREATE TABLE public.cart (
    user_id integer,
    flower_id integer NOT NULL,
    amount integer
);


ALTER TABLE public.cart OWNER TO flljclgzlhstxd;

--
-- Name: flower; Type: TABLE; Schema: public; Owner: flljclgzlhstxd
--

CREATE TABLE public.flower (
    flower_id integer NOT NULL,
    flower_type integer NOT NULL,
    flower_size integer NOT NULL,
    base_type integer NOT NULL,
    description text,
    image character varying(30),
    flower_price money
);


ALTER TABLE public.flower OWNER TO flljclgzlhstxd;

--
-- Name: flower_flower_id_seq; Type: SEQUENCE; Schema: public; Owner: flljclgzlhstxd
--

CREATE SEQUENCE public.flower_flower_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.flower_flower_id_seq OWNER TO flljclgzlhstxd;

--
-- Name: flower_flower_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: flljclgzlhstxd
--

ALTER SEQUENCE public.flower_flower_id_seq OWNED BY public.flower.flower_id;


--
-- Name: item_size; Type: TABLE; Schema: public; Owner: flljclgzlhstxd
--

CREATE TABLE public.item_size (
    size_id integer NOT NULL,
    size_type character varying(30) NOT NULL
);


ALTER TABLE public.item_size OWNER TO flljclgzlhstxd;

--
-- Name: item_size_size_id_seq; Type: SEQUENCE; Schema: public; Owner: flljclgzlhstxd
--

CREATE SEQUENCE public.item_size_size_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.item_size_size_id_seq OWNER TO flljclgzlhstxd;

--
-- Name: item_size_size_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: flljclgzlhstxd
--

ALTER SEQUENCE public.item_size_size_id_seq OWNED BY public.item_size.size_id;


--
-- Name: occasion; Type: TABLE; Schema: public; Owner: flljclgzlhstxd
--

CREATE TABLE public.occasion (
    occasion_id integer NOT NULL,
    occasion_type character varying(30) NOT NULL
);


ALTER TABLE public.occasion OWNER TO flljclgzlhstxd;

--
-- Name: occasion_occasion_id_seq; Type: SEQUENCE; Schema: public; Owner: flljclgzlhstxd
--

CREATE SEQUENCE public.occasion_occasion_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.occasion_occasion_id_seq OWNER TO flljclgzlhstxd;

--
-- Name: occasion_occasion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: flljclgzlhstxd
--

ALTER SEQUENCE public.occasion_occasion_id_seq OWNED BY public.occasion.occasion_id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: flljclgzlhstxd
--

CREATE TABLE public."user" (
    user_id integer NOT NULL,
    user_name character varying(30) NOT NULL,
    user_password text NOT NULL,
    user_user_name character varying(30) NOT NULL,
    address character varying(30) NOT NULL,
    email character varying(30) NOT NULL
);


ALTER TABLE public."user" OWNER TO flljclgzlhstxd;

--
-- Name: user_user_id_seq; Type: SEQUENCE; Schema: public; Owner: flljclgzlhstxd
--

CREATE SEQUENCE public.user_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_user_id_seq OWNER TO flljclgzlhstxd;

--
-- Name: user_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: flljclgzlhstxd
--

ALTER SEQUENCE public.user_user_id_seq OWNED BY public."user".user_id;


--
-- Name: vase; Type: TABLE; Schema: public; Owner: flljclgzlhstxd
--

CREATE TABLE public.vase (
    vase_id integer NOT NULL,
    vase_size integer NOT NULL,
    vase_type integer NOT NULL,
    vase_price money
);


ALTER TABLE public.vase OWNER TO flljclgzlhstxd;

--
-- Name: vase_vase_id_seq; Type: SEQUENCE; Schema: public; Owner: flljclgzlhstxd
--

CREATE SEQUENCE public.vase_vase_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.vase_vase_id_seq OWNER TO flljclgzlhstxd;

--
-- Name: vase_vase_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: flljclgzlhstxd
--

ALTER SEQUENCE public.vase_vase_id_seq OWNED BY public.vase.vase_id;


--
-- Name: flower flower_id; Type: DEFAULT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.flower ALTER COLUMN flower_id SET DEFAULT nextval('public.flower_flower_id_seq'::regclass);


--
-- Name: item_size size_id; Type: DEFAULT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.item_size ALTER COLUMN size_id SET DEFAULT nextval('public.item_size_size_id_seq'::regclass);


--
-- Name: occasion occasion_id; Type: DEFAULT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.occasion ALTER COLUMN occasion_id SET DEFAULT nextval('public.occasion_occasion_id_seq'::regclass);


--
-- Name: user user_id; Type: DEFAULT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public."user" ALTER COLUMN user_id SET DEFAULT nextval('public.user_user_id_seq'::regclass);


--
-- Name: vase vase_id; Type: DEFAULT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.vase ALTER COLUMN vase_id SET DEFAULT nextval('public.vase_vase_id_seq'::regclass);


--
-- Data for Name: cart; Type: TABLE DATA; Schema: public; Owner: flljclgzlhstxd
--

COPY public.cart (user_id, flower_id, amount) FROM stdin;
44	2	\N
44	1	\N
\.


--
-- Data for Name: flower; Type: TABLE DATA; Schema: public; Owner: flljclgzlhstxd
--

COPY public.flower (flower_id, flower_type, flower_size, base_type, description, image, flower_price) FROM stdin;
1	1	1	1	Small Blue	BlueF.jpg	$2.00
2	2	2	2	Medium Red	RedF.jpg	$3.00
3	3	3	3	Large Yellow	YellowF.jpg	$4.00
4	1	2	2	Large Purple	PurpleF.jpg	$5.00
5	2	2	2	Medium Blue	BlueF.jpg	$2.00
6	3	3	3	Large Blue	BlueF.jpg	$2.00
7	1	3	3	Large Red	RedF.jpg	$3.00
8	2	1	1	Small Red	RedF.jpg	$3.00
9	3	1	1	Small Yellow	YellowF.jpg	$4.00
10	1	1	1	SmallPurple	PurpleF.jpg	$5.00
11	2	2	2	Medium Purple	PurpleF.jpg	$5.00
12	3	2	2	Medium Yellow	YellowF.jpg	$4.00
\.


--
-- Data for Name: item_size; Type: TABLE DATA; Schema: public; Owner: flljclgzlhstxd
--

COPY public.item_size (size_id, size_type) FROM stdin;
1	SM
2	MED
3	LG
\.


--
-- Data for Name: occasion; Type: TABLE DATA; Schema: public; Owner: flljclgzlhstxd
--

COPY public.occasion (occasion_id, occasion_type) FROM stdin;
2	Anniversary
3	Birthday
1	Mother Day
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: flljclgzlhstxd
--

COPY public."user" (user_id, user_name, user_password, user_user_name, address, email) FROM stdin;
58	Bob	$2y$10$RuUB7Qmb3Zbefl/DvJ0QSu4kKl/RZn3PjF4Bg/zWz2UZTKl4gxJOG	coolguy	bob@gmail.com	123 abc
61	cikksn	$2y$10$lpyCt5nwrBWGsZ0Ajwab5eaixhSBu.8hsb/..nv05VIW1PKQpKP1q	jhasdk	bob@gmail.com	325
44	Coleen	coleen	coleen	ch	ch
45	jared	$2y$10$UzQi6ecsbpTyAaLUj987v.rD52rc7vEAnadpIcAOPmQUfE3p0x/Ae	jared	jared	jared
47	steve	steve	steve	steve@steve.steve	steve
52	happy	$2y$10$bK3Wab24tu5jcP6lX..EOeC74PdvOsuDTJq0Qr3z2Y39tLavPJ4S6	happy	bob@gmail.com	123 abc
\.


--
-- Data for Name: vase; Type: TABLE DATA; Schema: public; Owner: flljclgzlhstxd
--

COPY public.vase (vase_id, vase_size, vase_type, vase_price) FROM stdin;
1	1	1	$2.00
2	2	2	$3.00
3	3	3	$4.00
\.


--
-- Name: flower_flower_id_seq; Type: SEQUENCE SET; Schema: public; Owner: flljclgzlhstxd
--

SELECT pg_catalog.setval('public.flower_flower_id_seq', 12, true);


--
-- Name: item_size_size_id_seq; Type: SEQUENCE SET; Schema: public; Owner: flljclgzlhstxd
--

SELECT pg_catalog.setval('public.item_size_size_id_seq', 6, true);


--
-- Name: occasion_occasion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: flljclgzlhstxd
--

SELECT pg_catalog.setval('public.occasion_occasion_id_seq', 4, true);


--
-- Name: user_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: flljclgzlhstxd
--

SELECT pg_catalog.setval('public.user_user_id_seq', 61, true);


--
-- Name: vase_vase_id_seq; Type: SEQUENCE SET; Schema: public; Owner: flljclgzlhstxd
--

SELECT pg_catalog.setval('public.vase_vase_id_seq', 3, true);


--
-- Name: flower pk_flower_1; Type: CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.flower
    ADD CONSTRAINT pk_flower_1 PRIMARY KEY (flower_id);


--
-- Name: occasion pk_occasion_1; Type: CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.occasion
    ADD CONSTRAINT pk_occasion_1 PRIMARY KEY (occasion_id);


--
-- Name: item_size pk_size_1; Type: CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.item_size
    ADD CONSTRAINT pk_size_1 PRIMARY KEY (size_id);


--
-- Name: user pk_user_1; Type: CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT pk_user_1 PRIMARY KEY (user_id);


--
-- Name: vase pk_vase_1; Type: CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.vase
    ADD CONSTRAINT pk_vase_1 PRIMARY KEY (vase_id);


--
-- Name: cart uq_cart; Type: CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.cart
    ADD CONSTRAINT uq_cart UNIQUE (user_id, flower_id);


--
-- Name: user user_user_user_name_key; Type: CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_user_user_name_key UNIQUE (user_user_name);


--
-- Name: cart fk_cart_1; Type: FK CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.cart
    ADD CONSTRAINT fk_cart_1 FOREIGN KEY (user_id) REFERENCES public."user"(user_id);


--
-- Name: cart fk_cart_2; Type: FK CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.cart
    ADD CONSTRAINT fk_cart_2 FOREIGN KEY (flower_id) REFERENCES public.flower(flower_id);


--
-- Name: flower fk_flower_1; Type: FK CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.flower
    ADD CONSTRAINT fk_flower_1 FOREIGN KEY (flower_type) REFERENCES public.occasion(occasion_id);


--
-- Name: flower fk_flower_2; Type: FK CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.flower
    ADD CONSTRAINT fk_flower_2 FOREIGN KEY (flower_size) REFERENCES public.item_size(size_id);


--
-- Name: flower fk_flower_3; Type: FK CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.flower
    ADD CONSTRAINT fk_flower_3 FOREIGN KEY (base_type) REFERENCES public.vase(vase_id);


--
-- Name: vase fk_vase_1; Type: FK CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.vase
    ADD CONSTRAINT fk_vase_1 FOREIGN KEY (vase_size) REFERENCES public.item_size(size_id);


--
-- Name: vase fk_vase_2; Type: FK CONSTRAINT; Schema: public; Owner: flljclgzlhstxd
--

ALTER TABLE ONLY public.vase
    ADD CONSTRAINT fk_vase_2 FOREIGN KEY (vase_type) REFERENCES public.occasion(occasion_id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: flljclgzlhstxd
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO flljclgzlhstxd;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: LANGUAGE plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO flljclgzlhstxd;


--
-- PostgreSQL database dump complete
--

